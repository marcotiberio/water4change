<?php
/**
 * Template part for displaying page content in news.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w4c
 */

?>

<div class="box-on-top"></div>

<section class="news-container">

		<div class="entry-content">

			<?php if( have_rows('news_list', 47) ): ?>
					<ul>
						<?php while( have_rows('news_list', 47) ): the_row(); 

							// Load sub field value.
							$link = get_sub_field('link');
							$date = get_sub_field('date');
							$image_news = get_sub_field('image_news');
							$title = get_sub_field('title');
							$summary = get_sub_field('summary');
							?>
							
								
								<li class="news-inner">
									<div class="left">
										<div class="date">
											<span class="start-date"><?php the_sub_field('start_date'); ?></span>
											<?php if( get_sub_field('end_date') ): ?>
												<span class="end-date">&#8212; <?php the_sub_field('end_date'); ?></span>
											<?php endif; ?>
											<a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer"><p class="title-mobile"><?php the_sub_field('title'); ?></p></a>
										</div>
										<?php if( get_sub_field('image_news') ): ?>
											<div class="image" style="background: url('<?php the_sub_field('image_news'); ?>') no-repeat; background-size: cover; background-position: center;"></div>
										<?php endif; ?>
									</div>
									<div class="right">
									<a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer"><p class="title"><?php the_sub_field('title'); ?></p></a>
										<p class="intro"><?php the_sub_field('summary'); ?></p>
									</div>
								</li>
								
						<?php endwhile; ?>
					</ul>
				<?php endif; 
			?>

		</div>
	
</section>
