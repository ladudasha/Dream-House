<?php get_header(); ?>
    <!-- MAIN -->

    <section class="main" id="main">
        <div class="container">
            <h1 class="main__title"><?php the_field('main__title'); ?>
                <span>House</span></h1>
            <div class="main__wrap">
                <div class="main__content">
                    <p class="main__text text"><?php the_field('main__text'); ?></p>
                    <button class="main__btn btn">Free Consultation</button>
                </div>
                <img class="main__img" src="<?php the_field('main__img'); ?>" alt="">
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="gallery" id="gallery"> 
        <div class="container">
            <h2 class="gallery__title title">Build professional valuable room for you</h2>
            <div class="gallery__inner">
                <a href="<?php echo IMG_DIR; ?>/gallery/img1.png" title="image-1" class="gallery-link"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/gallery/img1.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/gallery/img2.png" title="image-2" class="gallery-link"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/gallery/img2.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/gallery/img3.png" title="image-3" class="gallery-link"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/gallery/img3.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/gallery/img4.png" title="image-4" class="gallery-link"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/gallery/img4.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/gallery/img5.png" title="image-5" class="gallery-link"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/gallery/img5.png" alt=""></a>
                <a href="<?php echo IMG_DIR; ?>/gallery/img6.png" title="image-6" class="gallery-link"><img class="gallery__img" src="<?php echo IMG_DIR; ?>/gallery/img6.png" alt=""></a>
            </div>

        </div>
    </section>

    <!-- CONSULTATION -->

    <section class="consultation" id="consultation">
        <div class="container">

            <h2 class="consultation__title title">Build your needs with Archmove</h2>

            <div class="consultation__wrap">
                <img src="<?php echo IMG_DIR; ?>/consultation/img.png" alt="">

                <div class="consultation__content">

                <?php foreach(getFeatures() as $feature): ?>

                    <div class="consultation__inner">                       
                        <div class="consultation__icon-box">
                            <img class="consultation__icon" src="<?php echo $feature['img'] ?>" alt="">
                        </div>
                        <div class="consultation__info">
                            <h4 class="consultation__subtitle"><?php echo $feature['title'] ?></h4>
                            <p class="consultation__text text"><?php echo $feature['text'] ?></p>
                        </div>
                    </div>

                    <?php endforeach; ?> 

                    <!-- <div class="consultation__inner">
                        <div class="consultation__icon-box">
                            <img class="consultation__icon" src="<?php echo IMG_DIR; ?>/consultation/Group2.svg" alt="">
                        </div>
                        <div class="consultation__info">
                            <h4 class="consultation__subtitle">No additional fees</h4>
                            <p class="consultation__text text">There are no hidden costs. The value of the offer you get is the value you paid.</p>
                        </div>
                    </div>

                    <div class="consultation__inner">
                        <div class="consultation__icon-box">
                            <img class="consultation__icon" src="<?php echo IMG_DIR; ?>/consultation/Group2.svg" alt="">
                        </div>
                        <div class="consultation__info">
                            <h4 class="consultation__subtitle">No additional fees</h4>
                            <p class="consultation__text text">There are no hidden costs. The value of the offer you get is the value you paid.</p>
                        </div>
                    </div>

                    <div class="consultation__inner">
                        <div class="consultation__icon-box">
                            <img class="consultation__icon" src="<?php echo IMG_DIR; ?>/consultation/Group3.svg" alt="">
                        </div>
                        <div class="consultation__info">
                            <h4 class="consultation__subtitle">Get escort from the Team</h4>
                            <p class="consultation__text text">Monitor reports from the Arsitag team who check directly in the field.</p>
                        </div>
                    </div> -->

                    <button class="consultation__btn btn">CONSULTATION</button>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section class="reviews" id="reviews">
        <div class="container">
            <div class="reviews-top">
                <h2 class="reviews-top__title title">Sound Too Good To Be True?</h2>


                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote>
                                <p class="swiper-text">We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.</p>
                            </blockquote>
                            <p class="swiper-text-small"><span>Adam Morph</span> — CEO A lfatech</p>
                        </div>
                        <div class="swiper-slide">
                            <blockquote>
                                <p class="swiper-text">We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.</p>
                            </blockquote>
                            <p class="swiper-text-small"><span>Adam Morph</span> — CEO A lfatech</p>
                        </div>
                        <div class="swiper-slide">
                            <blockquote>
                                <p class="swiper-text">We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.</p>
                            </blockquote>
                            <p class="swiper-text-small"><span>Adam Morph</span> — CEO A lfatech</p>
                        </div>
                        <div class="swiper-slide">
                            <blockquote>
                                <p class="swiper-text">We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.</p>
                            </blockquote>
                            <p class="swiper-text-small"><span>Adam Morph</span> — CEO A lfatech</p>
                        </div>

                    </div>
                    <div class="swiper-button-next-my"></div>

                    <div class="swiper-button-prev-my"></div>
                </div>
            </div>

            <div class="reviews-bottom">
                <img src="<?php echo IMG_DIR; ?>/reviews/img (1).png" alt="">
                <div>
                    <h2 class="reviews-bottom__title title">Realize your dream project with <span>Archmove</span></h2>
                    <button class="reviews__btn btn">FREE CONSULTATION</button>
                </div>
            </div>
        </div>
    </section>

    <!-- PARTNERS -->
    <section class="partners" id="partners">
        <div class="container">
            <h2 class="partners__title title">Our Partners</h2>
            <div class="partners__wrap">
                <img src="<?php echo IMG_DIR; ?>/partneirs/img1.png" alt="">
                <img src="<?php echo IMG_DIR; ?>/partneirs/img2.png" alt="">
                <img src="<?php echo IMG_DIR; ?>/partneirs/img3.png" alt="">
                <img src="<?php echo IMG_DIR; ?>/partneirs/img4.png" alt="">
                <img src="<?php echo IMG_DIR; ?>/partneirs/img5.png" alt="">
            </div>
        </div>
    </section>
    <?php get_footer(); ?>