<?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',

);
$characters_query = new WP_Query($args);

/*
echo '<pre>';
print_r($characters_query);
echo '</pre>';
*/
            
?>


    		<!-- Slider main container -->
    		<div class="swiper-container">
    		    <!-- Additional required wrapper -->
    		    <div class="swiper-wrapper">
    		    	<?php while ($characters_query->have_posts()) : $characters_query->the_post(); ?>
    		    		<div class="swiper-slide">
	    		    		<?php
	    		    			echo get_the_post_thumbnail( get_the_ID(), 'full' );
	    		    			the_title();
	    		    		?>
    		    		</div>
    		    		<?php endwhile; ?>
    		    </div>
        </div>
