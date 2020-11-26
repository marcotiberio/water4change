<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w4c
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="slider">
		<div class="post-details">
			<div class="top">
				<h1 class="category"><?php the_category(', '); ?></h1>
				<h1 class="date">
					<span>Date:</span>
					<span><?php the_field('start_date'); ?></span> &#8212; <span><?php the_field('end_date'); ?></span>
				</h1>
			</div>
		</div>
		<!-- Swiper -->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php if( have_rows('swiper_project') ): ?>
					<?php while( have_rows('swiper_project') ): the_row(); 

						// Load sub field value.
						$image = get_sub_field('image');
						$caption = get_sub_field('caption');
						?>
						
							<div class="swiper-slide">
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="">
								<div class="image-caption"><p><?php the_sub_field('caption'); ?></p></div>
							</div>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
    		<div class="swiper-button-prev"></div>
		</div>
		<!-- Swiper -->
	</div>

	<div class="entry-content">
		<div class="post-title" style="background-color: #EDEDED">
			<a href="<?php the_permalink(); ?>">
				<h1><?php print the_title(); ?></h1>
			</a>
		</div>
		<div></div>
		<div class="sidebar">
			<?php the_field('sidebar_info'); ?>
		</div>
		<div class="primary-content">
			<?php the_field('primary_content'); ?>
		</div>
		<div class="secondary-content">
			<?php the_field('secondary_content'); ?>
		</div>
	</div>

	
</article><!-- #post-<?php the_ID(); ?> -->
