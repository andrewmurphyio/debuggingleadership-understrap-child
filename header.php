<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="description" content="Debugging Leadership" />

	<meta property="og:site_name" content="Debugging Leadership" />
	<meta property="og:description" content="Technical Leadership Training" />
	<meta property="og:url" content="debuggingleadership.com" />
	<meta property="og:title" content="Debugging Leadership" />
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

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<!-- main header -->
<header class="header header--trans">
	<div class="container-md">
	<div class="header__logo">
		<a href="/">
		Debugging Leadership
		<span>Technical Leadership Training</span>
		</a>
	</div>
	<button type="button" class="navbar-toggle collapsed navbar-toggler" data-toggle="collapse" data-target=".headerNav">
		<span class="top"></span>
		<span class="middle"></span>
		<span class="bottom"></span>
	</button>
	<!-- navigation -->
	<?php wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container'		  => 'nav',
			'container_class' => 'navigation navbar-expand-lg',
			'menu_class'      => '',
			'fallback_cb'     => '',
			'menu_id'         => 'main-menu',
			'depth'           => 2,
			'walker'          => new AndrewUnderstrap_WP_Bootstrap_Navwalker(),
		)
	); ?>
	</div>
</header>
