<?php

declare(strict_types=1);
//Business/MailingService.php

namespace business;

use entities\Email;
use exceptions\InvalidEmailAddressException;
use exceptions\FailedEmailException;

class MailingService
{
    public function isValid($emailAddres): void
    {
        if (!filter_var($emailAddres, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailAddressException();
        }
    }

    public function makeContactEmail(string $emailSender, string $nameSender, string $subject, string $message): Email
    {
        $recipient = "contact@kimberlyverhecken.com";
        $messageToSend = "
        <html>
        <head>" . $subject . "</head>
        <body>
        <p>" . $message . ",<br>
        ".$nameSender."</p>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <' . $emailSender . '>' . "\r\n";

        $contactEmail = new Email($nameSender, $emailSender, $recipient, $subject, $messageToSend, $headers);

        return $contactEmail;
    }
    public function makeConfirmationEmail(string $emailform): Email
    {
        $emailSender = "contact@kimberlyverhecken.com";
        $nameSender = "Kimberly Verhecken";
        $recipient = $emailform;
        $subject = "Confirmation Contactrequest kimberlyverhecken.";
        $message = "
        <html>
        <head>Confirmation Contactrequest kimberlyverhecken.com</head>
        <body>
            <h2>Thank you so much for your interest!</h2>
            <p>I gladly confirm that your message has been sent successfully.</p>
            <p>I get back in touch as soon as possible.<p>
            <p>Kind regards,</br>
            Verhecken Kimberly</p>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <' . $emailSender . '>' . "\r\n";

        $confirmationEmail = new Email($nameSender, $emailSender, $recipient, $subject, $message, $headers);
        return $confirmationEmail;
    }

    public function sendMail(Email $email): ?bool
    {  
       $mailSend= mail(
            $email->getRecipient(),
            $email->getSubject(),
            $email->getMessage(),
            $email->getHeaders()
        );

        if($mailSend == false) {
            throw new FailedEmailException();
        } else {
            return $mailSend;
        }
    }
}
