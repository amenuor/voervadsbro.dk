<?php
/**
 * Template for displaying pages
 *
 * @package Voervadsbro.dk
 */

get_header();

while (have_posts()):
	the_post();
	?>

	<div class="row">
		<div class="large-12 columns pageheader">
			<div class="pageheadercontent">
				<?php the_title(); ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns wrap">
			<?php
			the_content();

						wp_link_pages(array(
							'before' => '<div class="page-links">' . __('Pages:', 'noborders') . ' <ul class="pagination">',
							'after'  => '</ul></div>',
							'separator' => ''
						));

						echo "\n\n";

						// If comments are open or we have at least one comment, load up the comment template
						if (comments_open() || '0' != get_comments_number()) {
							comments_template();
						}

						echo "\n\n";

					endwhile;
					?>
				</div>
			</div>
			    <?php

				if ( function_exists( 'sharing_display' ) ) {
			        sharing_display( '', true );
			    }

			    if ( class_exists( 'Jetpack_Likes' ) ) {
			        $custom_likes = new Jetpack_Likes;
			        echo $custom_likes->post_likes( '' );
			    }

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

				?>


<?php get_footer(); ?>
