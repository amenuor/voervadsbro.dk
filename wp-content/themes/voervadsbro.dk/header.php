<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Voervadsbro.dk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>
		window.flickrApi = '<?php echo get_option( Tagregator::PREFIX . 'settings', array() )["TGGRSourceFlickr"]["api_key"]; ?>';
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="container" class="container intro-effect-fadeout">
		<!-- Top Navigation -->
		<div id="top_nav" class="subline contain-to-grid sticky hide">
			<nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
				<ul class="title-area">
					<li class="name">
						<h1><a href="/"><i class="fi-trees"></i>Voervadsbro.dk</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>
				<?php
						$items_wrap = '<section class="top-bar-section"><ul class="right">%3$s</ul></section>';
						wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap' => $items_wrap, 'walker' => new VoervadsbroWalkerNavMenu ) );
				?>

			</nav>
		</div>
