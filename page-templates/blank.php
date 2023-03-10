<?php
/**
 * Template Name: Blank Page Template
 *
 * Template for displaying a blank page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="description" content="Andrew Murphy" />

	<meta property="og:site_name" content="Andrew Murphy" />
	<meta property="og:description" content="Andrew Murphy" />
	<meta property="og:url" content="andrewmurphy.io" />
	<meta property="og:title" content="Andrew Murphy" />
	<link rel="icon" type="image/png" href="/favicon.png" />

	<script async type="c24de81cc8d28cb7a7894d59-text/javascript" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=R7s4QR"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117930301-1" type="c24de81cc8d28cb7a7894d59-text/javascript"></script>
	<script type="c24de81cc8d28cb7a7894d59-text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
	
		gtag('config', 'UA-117930301-1');
		</script>
	<?php wp_head(); ?>
</head>
<body>
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'loop-templates/content', 'blank' );
	}
	wp_footer();
	?>
</body>
</html>
