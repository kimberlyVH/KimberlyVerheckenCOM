<?php
//Presentation/header.php;
declare(strict_types=1);

namespace presentation;
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height initial-scale=1.0" />
    <link rel="stylesheet" href="presentation/css/kimberlyclean.css" />
    <!-- language icons devicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <title>KimberlyVerhecken | Portfolio</title>
</head>

<body>
    <!--start navigation-->
    <header>
        <nav class="blurr navbar">
            <a class="logospace" href="#home">Home</a>
            <!--<a id="logo" href="./index.php"><img src="Presentation/icons/logo.svg" alt="logo KimmyMayhemDev"/></a>-->

            <div id="burgermenu" class="hamburger">
                <span class="sm-bar"></span>
                <span class="mid-bar"></span>
                <span class="lg-bar rotatePos"></span>
                <span class="mid-bar"></span>
                <span class="lg-bar rotateNeg"></span>
                <span class="mid-bar"></span>
                <span class="sm-bar"></span>
            </div>
            <ul class="nav-menu blurr">
                <li class="nav-item"><a href="#skills"class="nav-link">Skills</a></li>
                <li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="#illustrations" class="nav-link">Illustrations</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <!--include searchbox and look how to program it-->
        </nav>
    </header>
    <script src="presentation/js/script.js"></script>
    <!--end navigation-->