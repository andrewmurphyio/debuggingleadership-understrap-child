<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer class="footer">
	<div class="container-md">
	<div class="footer__logo">
		<a href="/">
		Debugging Leadership
		<span>Technical Leadership Training</span>
		</a>
	</div>
	<ul class="btn-links">
		<li>
		<a href="https://serena613460.typeform.com/to/oBYRFWtq" class="button button--small">Let's Talk</a>
		</li>
		<li>
		<a href="https://www.linkedin.com/in/andrewamurphy/" class="button button--small"><img src="https://andrewmurphy.io/assets/img/linked-in-logo@2x.png" alt="" width="18" /></a>
		</li>
		<!-- <li>
		<a href="https://twitter.com/andrewmurphyio" class="button button--small"><img src="https://andrewmurphy.io/assets/img/twitter@2x.png" alt="" width="18" /></a>
		</li> -->
	</ul>
	<ul>
		<li>&copy; Copyright 2023, Andrew Murphy</li>
		<li><a href="/privacy-policy/">Privacy Policy</a></li>
		<li><a href="/terms-of-use/">Terms of Use</a></li>
	</ul>
	</div>
</footer>

<?php wp_footer(); ?>

<script async type="text/javascript" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=R7s4QR"></script>

<script type="text/javascript">
	document.querySelector('.SRigKh').addEventListener('click', function (){
		window._klOnsite = window._klOnsite || []; 
		window._klOnsite.push(['openForm', 'SRigKh']);
	});
</script>


</body>

</html>

