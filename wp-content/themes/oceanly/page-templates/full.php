<?php
/**
 * Template Name: Full width template
 *
 * @package Oceanly
 */

get_header();
?>

	<div class="content-sidebar-wrap">
		<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
		?>

		</main><!-- #primary -->
	</div><!-- .content-sidebar-wrap -->

<?php
get_footer();
