<?php

$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',
);
$characters_query = new WP_Query($args);
?>

<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <?php
        // Récupérer toutes les diapositives
        $slides = array();
        while ($characters_query->have_posts()) : $characters_query->the_post();
            ob_start();
            ?>
            <div class="swiper-slide">
                <?php
                echo get_the_post_thumbnail(get_the_ID(), 'full');
                the_title();
                ?>
            </div>
            <?php
            $slides[] = ob_get_clean();
        endwhile;

        // Dupliquer certaines diapositives pour assurer le mode boucle
        $loopedSlides = 2;
        for ($i = 0; $i < $loopedSlides; $i++) {
            foreach ($slides as $slide) {
                echo $slide;
            }
        }
        ?>
    </div>
</div>


