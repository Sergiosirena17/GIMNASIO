<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
        <script>

        alert("POR FAVOR DEBES INICIAR SESIÓN");
        window.location = "index.php";
        </script>
        ';
        session_destroy();
        die();    
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----------------------------------ICONO PESTAÑA--------------------------------------------------------->
    <link rel="shortcut icon" href="tools/img/logo.png" type="image/x-icon">
    <!----------------------------------google fonts--------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Quicksand:wght@300;500;700&family=Red+Hat+Display:wght@400;700;900&display=swap" rel="stylesheet">
    <!----------------------------------REMIXICON LIBRARY------------------------------------------------------->

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!----------------------------------CSS------------------------------------------------------------->
    <link rel="stylesheet" href="tools/css/style.css">


    <!----------------------------------write here------------------------------------------------------->

    <title>Fitness Club-Home</title>
</head>
<body>
    <!----------------------------------HEADER------------------------------------------------------->
    <header class="headerHome" id="header">
        <nav class="navHome container">
            <a href="#" class="nav__logo">
                <img src="tools/img/logo.png" alt="logo">FITNESS CLUB
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Menu</a>
                    </li>
                    <li class="nav__item">
                        <a href="#program" class="nav__link ">Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="#choose" class="nav__link">Choose Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="#pricing" class="nav__link">Pricing</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>

            </div>

            <!--toggle button-->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header> 


    <!------------------------------------------------------body-->
    <section class="trainer section" id="trainer">
        <div class="container">
            <div class="sectionHome__data">
                <h2 class="section__subtitle">Train Now</h2>
                <div class="secction__titles">
                    <h1 class="section__title-border">CHOOSE</h1>
                    <h1 class="section__title">YOUR EXERCISE</h1>
                </div>
            </div>

            <div class="trainer__container grid">
                <article class="trainer__card ">

                    <header class="trainer__header">
                        <div class="trainer__shape">
                            <img src="tools/img/choose5.png" alt="trainer image" class="trainer__img">
                        </div>
                        <h1 class="trainer__title">BASIC PACKGE</h1>
                        <h2 class="trainer__number">$200</h2>
                    </header>

                    <ul class="trainer__list">
                        <li class="trainer__item">
                            <i class="ri-checkbox-circle-line"></i>5 Days In A Week
                        </li>
                        <li class="trainer__item">
                            <i class="ri-checkbox-circle-line"></i>01 Sweatshirt
                        </li>
                        <li class="trainer__item trainer__item-opacity">
                            <i class="ri-checkbox-circle-line "></i>01 Bottle of Protein
                        </li>
                        <li class="trainer__item trainer__item-opacity">
                            <i class="ri-checkbox-circle-line"></i>Access to Videos
                        </li>
                        <li class="trainer__item trainer__item-opacity">
                            <i class="ri-checkbox-circle-line"></i>Muscle Stretching
                        </li>

                    </ul>
                    <a href="#" class="button button__flex trainer__button">Purchase Now
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </article>

                <article class="trainer__card trainer__card-active">

                    <header class="trainer__header">
                        <div class="trainer__shape">
                            <img src="tools/img/calculate.png" alt="trainer image" class="trainer__img">
                        </div>
                        <h1 class="trainer__title">PREMIUM PACKGE</h1>
                        <h2 class="trainer__number">$250</h2>
                    </header>

                    <ul class="trainer__list">
                        <li class="trainer__item">
                            <i class="ri-checkbox-circle-line"></i>5 Days In A Week
                        </li>
                        <li class="trainer__item">
                            <i class="ri-checkbox-circle-line"></i>01 Sweatshirt
                        </li>
                        <li class="trainer__item ">
                            <i class="ri-checkbox-circle-line"></i>01 Bottle of Protein
                        </li>
                        <li class="trainer__item trainer__item-opacity">
                            <i class="ri-checkbox-circle-line"></i>Access to Videos
                        </li>
                        <li class="trainer__item trainer__item-opacity">
                            <i class="ri-checkbox-circle-line"></i>Muscle Stretching
                        </li>

                    </ul>
                    <a href="#" class="button button__flex trainer__button">Purchase Now
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </article>

                <article class="trainer__card trainer__card-active">

                    <header class="trainer__header">
                        <div class="trainer__shape">
                            <img src="tools/img/choose3.png" alt="trainer image" class="trainer__img">
                        </div>
                        <h1 class="trainer__title">PREMIUM PACKGE</h1>
                        <h2 class="trainer__number">$250</h2>
                    </header>

                    <ul class="trainer__list">
                        <li class="trainer__item">
                            <i class="ri-checkbox-circle-line"></i>5 Days In A Week
                        </li>
                        <li class="trainer__item">
                            <i class="ri-checkbox-circle-line"></i>01 Sweatshirt
                        </li>
                        <li class="trainer__item ">
                            <i class="ri-checkbox-circle-line"></i>01 Bottle of Protein
                        </li>
                        <li class="trainer__item trainer__item-opacity">
                            <i class="ri-checkbox-circle-line"></i>Access to Videos
                        </li>
                        <li class="trainer__item trainer__item-opacity">
                            <i class="ri-checkbox-circle-line"></i>Muscle Stretching
                        </li>

                    </ul>
                    <a href="#" class="button button__flex trainer__button">Purchase Now
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </article>
            </div>
            <a href="php/cerrar_sesion.php">CERRAR SESIÓN</a>

        </div>
    </section>       




</body>
</html>