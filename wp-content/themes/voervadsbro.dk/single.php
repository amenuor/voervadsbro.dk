<?php
/**
* Template for displaying posts
*
* @package Voervadsbro.dk
*/

get_header();

while (have_posts()):
	the_post();
	?>

	<div class="row pageheader">
		<div class="large-12 columns pageheadercontent">
		</div>
	</div>

	<div class="moveup">

		<div class="row">
			<div class="large-12 columns">
				<div class="socialsharebar">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<div class="pagetitle">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="large-12 columns wrap">

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="row"><div class="large-12 columns text-center"><?php the_post_thumbnail('large'); ?></div></div>
        <?php endif;?>


				<?php
				the_content();

				if ( function_exists( 'comment_form' ) ) {
					wp_list_comments( array(
						'walker' => new VoervadsbroWalkerComment,
						'style' => 'ul',
						'callback' => null,
						'end-callback' => null,
						'type' => 'all',
						'page' => null,
						'avatar_size' => 32
					) );
					comment_form();
				}

			endwhile;
			?>
		</div>
	</div>

</div><!-- end moveup -->

<svg id="stamp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
	<path d="M0 0 Q 2.5 40 5 0
	Q 7.5 40 10 0
	Q 12.5 40 15 0
	Q 17.5 40 20 0
	Q 22.5 40 25 0
	Q 27.5 40 30 0
	Q 32.5 40 35 0
	Q 37.5 40 40 0
	Q 42.5 40 45 0
	Q 47.5 40 50 0
	Q 52.5 40 55 0
	Q 57.5 40 60 0
	Q 62.5 40 65 0
	Q 67.5 40 70 0
	Q 72.5 40 75 0
	Q 77.5 40 80 0
	Q 82.5 40 85 0
	Q 87.5 40 90 0
	Q 92.5 40 95 0
	Q 97.5 40 100 0 Z">
</path>
</svg>

<section id="comments" class="divider text-left">
	<div class="row">
		<div class="12-large columns">

		</div>
	</div>
</section>


<?php get_footer(); ?>
