<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main class="main-content no-gap" id="page-wrapper">

	<div class="container-md" id="content">
		<div class="container-md">
			<div class="row">

				<!-- Do the left sidebar check -->
				<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<main class="site-main" id="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->

				<!-- Do the right sidebar check -->
				<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

			</div><!-- .row -->

		</div><!-- .container-md -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
