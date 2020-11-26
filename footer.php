<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package w4c
 */

?>

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<footer class="site-footer" id="siteFooter" >

		<button class="hamburger hamburger--squeeze" id="menuToggle" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>

		<nav id="site-navigation" class="main-navigation">
			<div id="showFooter">
				<svg width="11.47" height="6.47" viewBox="0 0 11.47 6.47">
					<g transform="translate(-69.593 -1028.763)">
						<line id="Line_7" data-name="Line 7" y2="8" transform="translate(70 1034.827) rotate(-135)" fill="none" stroke="#000" stroke-width="1.15"/>
						<line id="Line_8" data-name="Line 8" y2="8" transform="translate(75 1029.17) rotate(-45)" fill="none" stroke="#000" stroke-width="1.15"/>
					</g>
				</svg>
			</div>
			<div class="filter">
				<p id="label">Archive</p>
				<div class="filter-inner">
					<p class="type 2020">2020</p>
					<p class="type field-works">Field Works</p>
					<p class="type workshops">Workshops</p>
					<p class="type conferences-symposia">Conferences/Symposia</p>
					<p class="type meetings">Meetings</p>
				</div>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #main-navigation -->

		<nav id="mobile-navigation" class="mobile-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mobile-menu',
					'menu_id'        => 'mobile-menu',
				)
			);
			?>
		</nav><!-- #mobile-navigation -->
		
		<div class="site-info" id="siteInfo">
			<span class="close" id="closeFooter">
				<svg width="8.506" height="8.507" viewBox="0 0 8.506 8.507">
					<g data-name="Group 34" transform="translate(-80.093 -1068.093)">
						<line id="Line_7" data-name="Line 7" y2="10.88" transform="translate(88.193 1068.5) rotate(45)" fill="none" stroke="#fff" stroke-width="1.15"/>
						<line id="Line_8" data-name="Line 8" y2="10.88" transform="translate(88.193 1076.193) rotate(135)" fill="none" stroke="#fff" stroke-width="1.15"/>
					</g>
				</svg>
			</span>
			<div class="footer-content">
				<div class="col">
					<?php if ( get_field('column_1', 292) ) : ?>
						<?php echo get_field('column_1', 292); ?>
					<?php endif; ?>
				</div>
				<div class="col">
					<?php if ( get_field('column_2', 292) ) : ?>
						<?php echo get_field('column_2', 292); ?>
					<?php endif; ?>
				</div>
				<div class="col">
					<?php if ( get_field('column_3', 292) ) : ?>
						<?php echo get_field('column_3', 292); ?>
					<?php endif; ?>
				</div>
				<div class="col">
					<?php if ( get_field('column_4', 292) ) : ?>
						<?php echo get_field('column_4', 292); ?>
					<?php endif; ?>
				</div>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
