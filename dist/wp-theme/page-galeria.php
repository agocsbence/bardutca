<?php

/**
 * Template Name: Galéria
 */


get_header(); ?>
<section class="section" id="projektjeink">

<div class="container">
    <div class="row">

        <?php
        if( have_rows('galeria_1') ): while ( have_rows('galeria_1') ) : the_row(); ?>

            <div class="col-sm-12 col-lg-6">
                <div class="swiper-container mySwiper" id="galeria_1">
                    <div class="swiper-wrapper">

                        <?php if( have_rows('kepek') ): while ( have_rows('kepek') ) : the_row(); ?>
                            <div class="swiper-slide">
                                <a href="<?php echo get_sub_field('kep'); ?>"><img src="<?php echo get_sub_field('kep'); ?>" alt=""></a>
                            </div>
                        <?php endwhile; endif; ?>

                    </div>

                    <div class="swiper-title">
                        <h2><?php the_sub_field('galeria_neve') ?></h2>
                    </div>
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-pagination swiper-pagination-white"></div>
                </div>
            </div>

        <?php endwhile; endif; ?>    

    </div>
</div>
<div class="container">
    <div class="row">
        
    </div>
</div>

</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper("#galeria_1", {
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- <script defer src="<?php bloginfo('template_url') ?>/assets/js/jquery.magnific-popup.min.js"></script> -->
<script src="<?php bloginfo('template_url') ?>/assets/js/scripts.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#galeria_1 .swiper-wrapper').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        }
    });
});
</script>

<?php get_footer(); ?>