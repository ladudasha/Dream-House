
    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer__wrap">

            <?php 
                wp_nav_menu( [
                    'theme_location'  => 'bottom_menu',
                 
                    'container'       => 'nav',
                    'container_class' => 'footer__nav nav',
                    'container_id'    => '',
                    'menu_class'      => 'nav__list',
                ] );
             ?>
                <!-- <nav class="footer__nav nav">
                    <ul class="nav__list">
                        <li class="nav__list-item"><a class="nav__link" href="#main">About Us</a></li>
                        <li class="nav__list-item"><a class="nav__link" href="#partners">How it Works</a></li>
                        <li class="nav__list-item"><a class="nav__link" href="#consultation">FAQ</a></li>
                        <li class="nav__list-item"><a class="nav__link" href="#reviews">Contact Us</a></li>
                        <li class="nav__list-item"><a class="nav__link" href="#gallery">Privacy Policy</a></li>
                    </ul>
                </nav> -->
                <a href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo IMG_DIR; ?>/header/logo-arch.svg" alt="">
                </a>
                

            </div>


        </div>

    </footer>
    <?php wp_footer(); ?>

     <!-- <script src="./libs/magnific-popup/jquery.magnific-popup.min.js"></script>     

 
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>   

    <script src="assets/js/script.js"></script> -->
</body>

</html>