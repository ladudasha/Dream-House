<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="./css/abstracts/normalize.css">
  
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> 
    <link rel="stylesheet" href="./libs/magnific-popup/magnific-popup.css"> 
    <link rel="stylesheet" href="./css/style.css"> -->

    <?php wp_head(); ?>
    <title>dream-hourse</title>
</head>

<body>

    <!-- HEADER -->

    <header class="header">
        <div class="header__wrap">
            <div class="header__left">
                <img class="header__logo logo" src="<?php bloginfo( 'template_url' ); ?> ./assets/images/header/logo-arch.svg" alt="">
                <nav class="header__nav nav">
                    <ul class="nav__list">
                        <li class="nav__list-item">Design Gallery</li>
                        <li class="nav__list-item">List of Architect</li>
                        <li class="nav__list-item">Articles</li>
                        <li class="nav__list-item">How it Works</li>
                    </ul>
                </nav>
            </div>
            <div class="header__right">
                <img class="header__seach" src="<?php echo IMG_DIR; ?>/header/ic-searhc.svg" alt="">
                <button class="header__btn btn header__btn--sign-in">Sign In</button>
                <button class="header__btn btn header__btn--sign-up">Sign Up</button>
            </div>
        </div>
    </header>
