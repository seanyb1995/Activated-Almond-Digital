<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Activated_Almond_Digital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="wp-content/themes/activated-almond-digital/css/fontawesome-free-5.9.0-web/css/all.css" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/845c12c9ef.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="overlay"></div>
  </div>
<div id="page" class="site">
	<header id="masthead" class="site-header">
    <div class="container">
        <?php
        the_custom_logo();
        ?>
		<nav id="site-navigation" class="main-navigation">
      <a href="javascript:void(0);" class="icon" onclick="openNav()">
        <i class="fa fa-bars"></i>
        <span>Menu</span>
      </a>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #side-navigation -->
    </div><!-- container-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
