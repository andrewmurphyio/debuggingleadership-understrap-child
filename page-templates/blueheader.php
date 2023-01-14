<?php

/**
 * Template Name: Blue Header
 *
 * Display the blue mega header
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header("blue");
?>

<main class="main-content" id="page-wrapper">

	<?php
	while (have_posts()) {
		the_post();
		get_template_part('loop-templates/content-blue', 'page');
	}
	?>

</main><!-- #main -->


<?php
get_footer();
