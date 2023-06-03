<?php
//index.php
declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('expose_php', false);
error_reporting(E_ALL);

spl_autoload_register('my_psr4_autoloader');
function my_psr4_autoloader($class)
{
    $class_path = str_replace('\\', '/', $class);

    $file = __DIR__ . "/" . $class_path . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}

use business\MailingService;
use exceptions\InvalidEmailAddressException;
use exceptions\FailedEmailException;

$nameSender = '';
$emailSender = '';
$subject = '';
$message = '';
$error = '';
$succes = '';


if (isset($_POST["btnSend"])) {

    if (!empty($_POST["firstname"])) {
        $nameSender = htmlentities($_POST["firstname"]);
    } else {
        $error .= "Please fill in your name. <br>";
    }

    if (!empty($_POST["emailSender"])) {
        $emailSender = $_POST["emailSender"];
    } else {
        $error .= "Please fill in your email address,
        this way it is easier of me to respond. <br>";
    }

    if (!empty($_POST['mailSubject'])) {
        $subject = htmlentities($_POST['mailSubject']);
    } else {
        $error .= "Please give a short description of what it is you would like to discuss <br>";
    }

    if (!empty($_POST['message'])) {
        $message = htmlentities($_POST['message']);
    } else {
        $error .= "Please write your message <br>";
    }

    if ($error == '') {
        try {
            $mailingService = new MailingService();
            $mailingService->isValid($emailSender);
            $contactEmail = $mailingService->makeContactEmail($emailSender, $nameSender, $subject, $message);
            $send = $mailingService->sendMail($contactEmail);

            $comfirmationEmail = $mailingService->makeConfirmationEmail($emailSender);
            $mailingService->sendMail($comfirmationEmail);

            $succes = "Thank you, your email has been send successfully!,<br>
            You will recieve a confirmation email immediately.<br>";

            header("location: thankYou.php");
            exit();
        } catch (InvalidEmailAddressException $e) {
            $error .= "Given Emailaddres is unvalid, please try again.<br>";
        } catch (FailedEmailException $e) {
            $error .= "I'm sorry, something went wrong. Please try again later.<br>";
        }
    }
}
include("presentation/kimberlyverhecken.php");
