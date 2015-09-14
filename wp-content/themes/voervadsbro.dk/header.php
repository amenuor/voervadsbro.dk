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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="container" class="container intro-effect-fadeout">
		<!-- Top Navigation -->
		<div id="top_nav" class="subline contain-to-grid sticky hide">
			<nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
				<ul class="title-area">
					<li class="name">
						<h1><a href="#">Voervadsbro.dk</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<!-- Right Nav Section -->
					<ul class="right">
						<li class="active"><a href="#">Right Button Active</a></li>
						<li class="has-dropdown">
							<a href="#">Right Button Dropdown</a>
							<ul class="dropdown">
								<li><a href="#">First link in dropdown</a></li>
								<li class="active"><a href="#">Active link in dropdown</a></li>
							</ul>
						</li>
					</ul>

					<!-- Left Nav Section -->
					<ul class="left">
						<li><a href="#">Left Nav Button</a></li>
					</ul>
				</section>
			</nav>
		</div>
