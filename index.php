<?php
/**
 * The template for displaying main-page.
 *
 * @package Ignot
 */

get_header();

include('template-parts/index/first_screen/index.php'); ?>


<!--    <div class="site_content">-->
<!--		--><?php
//		while ( have_posts() ) {
//			the_post();
//			include( 'template-parts/post_card.php' );
//		}
//
//		the_posts_pagination( array(
//			'mid_size' => 2,
//			'prev_text' => __( 'Prev', 'theme' ),
//			'next_text' => __( 'Next', 'theme' ),
//		) );
//		?>
<!--    </div>-->

<?php
//get_sidebar();
get_footer();