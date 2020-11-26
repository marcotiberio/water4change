<?php
/**
 * Template part for displaying page content in team.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package w4c
 */

?>

<div class="box-on-top"></div>

<section class="team-container">

		<div class="table-of-contents">
			<h5 class="title">Team</h5>
			<ul>
				<li>
					<a href="#principalInvestigators" onclick="scrollPrincipalInvestigators()">Principal Investigators <br>/ Project Coordination</a>
				</li>
				<li>
					<a href="#coInvestigators" onclick="scrollCoInvestigators()">Co-Investigators</a>
				</li>
				<li>
					<a href="#phdScholars" onclick="scrollPhdScholars()">PhD Scholars</a>
				</li>
			</ul>
		</div>

		<div class="entry-content">

			<div class="intro">
				<?php if ( get_field('intro_team') ) : ?>
					<?php echo get_field('intro_team'); ?>
				<?php endif; ?>
				
			</div>

			<section class="accordion-container">

			<div class="accordion-title" id="principalInvestigators">
				<h5>Principal Investigators / Project Coordination</h5>
			</div>

			<?php

				// check if the repeater field has rows of data
				if( have_rows('accordion_repeater_1') ):
					
					
					// loop through the rows of data for the tab header
					while ( have_rows('accordion_repeater_1') ) : the_row();
						
						$degree = get_sub_field('degree');
						$name = get_sub_field('name');
						$position = get_sub_field('position');
						$bio = get_sub_field('bio');

					?>
					
						<button class="accordion">
							<div class="top">
								<span class="degree"><?php echo $degree; ?></span><span class="name"><?php echo $name; ?>,</span>
							</div>
							<p class="position"><?php echo $position; ?></p>
						</button>
						<div class="panel">
							<p class="bio"><?php echo $bio; ?></p>
						</div>

						<?php
					endwhile; //End the loop 

				else :

					// no rows found
					echo 'Come back tomorrow';

				endif;
			?>

			<div class="accordion-title" id="coInvestigators">
				<h5>Co-Investigators</h5>
			</div>

			<?php

				// check if the repeater field has rows of data
				if( have_rows('accordion_repeater_2') ):
					
					
					// loop through the rows of data for the tab header
					while ( have_rows('accordion_repeater_2') ) : the_row();
						
						$degree = get_sub_field('degree');
						$name = get_sub_field('name');
						$position = get_sub_field('position');
						$bio = get_sub_field('bio');

					?>
					
						<button class="accordion">
							<div class="top">
								<span class="degree"><?php echo $degree; ?></span><span class="name"><?php echo $name; ?>,</span>
							</div>
							<p class="position"><?php echo $position; ?></p>
						</button>
						<div class="panel">
							<p class="bio"><?php echo $bio; ?></p>
						</div>

						<?php
					endwhile; //End the loop 

				else :

					// no rows found
					echo 'Come back tomorrow';

				endif;
			?>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

			<div class="accordion-title" id="phdScholars">
				<h5>PhD Scholars</h5>
			</div>

			<?php

				// check if the repeater field has rows of data
				if( have_rows('accordion_repeater_3') ):
					
					
					// loop through the rows of data for the tab header
					while ( have_rows('accordion_repeater_3') ) : the_row();
						
						$degree = get_sub_field('degree');
						$name = get_sub_field('name');
						$position = get_sub_field('position');
						$bio = get_sub_field('bio');

					?>
					
						<button class="accordion">
							<div class="top">
								<span class="degree"><?php echo $degree; ?></span><span class="name"><?php echo $name; ?>,</span>
							</div>
							<p class="position"><?php echo $position; ?></p>
						</button>
						<div class="panel">
							<p class="bio"><?php echo $bio; ?></p>
						</div>

						<?php
					endwhile; //End the loop 

				else :

					// no rows found
					echo 'Come back tomorrow';

				endif;
			?>

			</section>

		</div>
	
</section>
