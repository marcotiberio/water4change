<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package w4c
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>

			<div class="ticker-tape">
				<div class="inside">
					<?php if( have_rows('news_list', 47) ): ?>

						<?php $start = 1; $end = 2; ?> <!-- start and ending number -->
						
						<?php while( have_rows('news_list', 47) ): the_row(); 

							

								// Load sub field value.
								$link = get_sub_field('link');
								$date = get_sub_field('date');
								$image_news = get_sub_field('image_news');
								$title = get_sub_field('title');
								$summary = get_sub_field('summary');
								?>
								
								<?php if( $start <= $end ): ?> <!-- if start <= ending number, show -->
									
									<div class="latestpost">
										<a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer"><p class="title"><?php the_sub_field('title'); ?></p></a>
									</div>
									<span id="bullet">&#8226;</span>
								<?php endif; ?>
	
						<?php $start++; ?> <!-- start + 1 -->
									
						<?php endwhile; ?>

					<?php endif; ?>
					
					<?php
						$args = array(
							'numberposts'	=> 4,
							'post_type'		=> 'post',
							'orderby' => 'date',
							'order' => 'DESC'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
							<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<a href="<?php the_permalink(); ?>"><?php the_title( '<p class="entry-title">', '</p>' ); ?></a>
							</article>
							<span id="bullet">&#8226;</span>
						<?php endforeach; 
					?>

					<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<p>WATERFORCHANGE</p>
					</article>
					<span id="bullet">&#8226;</span>

					<?php if( have_rows('news_list', 47) ): ?>

						<?php $start = 2; $end = 4; ?> <!-- start and ending number -->

					<?php while( have_rows('news_list', 47) ): the_row(); 

						

							// Load sub field value.
							$link = get_sub_field('link');
							$date = get_sub_field('date');
							$image_news = get_sub_field('image_news');
							$title = get_sub_field('title');
							$summary = get_sub_field('summary');
							?>
							
							<?php if( $start <= $end ): ?> <!-- if start <= ending number, show -->
								
								<div class="latestpost">
									<a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer"><p class="title"><?php the_sub_field('title'); ?></p></a>
								</div>
								<span id="bullet">&#8226;</span>
							<?php endif; ?>

					<?php $start++; ?> <!-- start + 1 -->
								
					<?php endwhile; ?>

					<?php endif; ?>

					<?php
						$args = array(
							'numberposts'	=> 4,
							'post_type'		=> 'post',
							'orderby' => 'date',
							'order' => 'DESC'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
							<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<a href="<?php the_permalink(); ?>"><?php the_title( '<p class="entry-title">', '</p>' ); ?></a>
							</article>
							<span id="bullet">&#8226;</span>
						<?php endforeach; 
					?>

					<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<p>WATERFORCHANGE</p>
					</article>
					<span id="bullet">&#8226;</span>

				</div>
			</div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->
