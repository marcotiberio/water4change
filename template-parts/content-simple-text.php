<?php
/**
 * Template part for displaying page content in simple-text.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w4c
 */

?>

<div class="box-on-top"></div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php
			the_content(
			);
			?>
		</div>


	
</article><!-- #post-<?php the_ID(); ?> -->
