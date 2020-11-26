<?php
/**
 * Template Name: Simple Text
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

	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-simple-text', 'page' );

		endwhile; // End of the loop.
	?>
	

</main><!-- #main -->


<?php
get_footer();