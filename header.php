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
    <title><?php bloginfo( 'description' ); ?></title>
</head>

<body>

    <!-- HEADER -->

    <header class="header">
        <div class="header__wrap">
            <div class="header__left">
                <a href="<?php bloginfo( 'url' ); ?>" class="header__logo-link">
                    <img class="header__logo logo" src="<?php bloginfo( 'template_url' ); ?> ./assets/images/header/logo-arch.svg" alt="">
                </a>
            <?php 
                wp_nav_menu( [
                    'theme_location'  => 'top_menu',
                
                    'container'       => 'nav',
                    'container_class' => 'header__nav nav',
                    'container_id'    => '',
                    'menu_class'      => 'nav__list',
                ] );
            ?>
        
            </div>
            <div class="header__right">
                <img class="header__seach" src="<?php echo IMG_DIR; ?>/header/ic-searhc.svg" alt="">
                <button class="header__btn btn header__btn--sign-in">Sign In</button>
                <button class="header__btn btn header__btn--sign-up">Sign Up</button>
            </div>
        </div>
    </header>
