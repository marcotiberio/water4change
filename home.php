<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w4c
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="featured-posts">

			<?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => -1,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
						<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-image' );?>
						<article class="<?php the_field('category'); ?> <?php the_date( 'Y' ); ?>" id="post-<?php the_ID(); ?>" onclick="window.location.href='<?php the_permalink(); ?>'">
							<div class="post-info">
								<div class="post-thumbnail-front" id="postThumbnailFront" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center;"></div>
								<div class="post-thumbnail-back" id="postThumbnailBack" style="background: url('<?php the_field('post_thumbnail_back'); ?>') no-repeat; background-size: cover; background-position: center;"></div>
								<div class="post-details-front">
									<h1 class="category" id="category"><?php the_category(', '); ?></h1>	
								</div>
								<div class="post-details-back">
									<div class="top">
										<h1 class="category" id="category"><?php the_category(', '); ?></h1>
										<div class="date" id="date">
											<span>Date:</span>
											<span class="start-date"><?php the_field('start_date'); ?></span> &#8212; <span class="end-date"><?php the_field('end_date'); ?></span>
										</div>
									</div>
									<div class="bottom">
										<div class="post-title">
											<h1><?php print the_title(); ?></h1>
										</div>
									</div>
								</div>
							</div>
						</article>
						<?php
					endwhile;
				endif; 
			?>


	</section>
	

</main><!-- #main -->


<?php
get_footer();