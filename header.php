<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lorenzosfienti-wptheme' ); ?></a>
	<header class="py-3 border-bottom">
		<div class="container d-flex flex-wrap justify-content-center">
		<h1 class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto fs-4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-dark text-decoration-none">
			<?php bloginfo( 'name' ); ?>
		</a></h1>
		<?php
		get_search_form();
		?>
		</div>
	</header>
	<nav class="py-2 mb-4 bg-light border-bottom primary-navigation">
		<div class="container d-flex flex-wrap">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class' => 'nav',
					'menu_id' => 'primary-navigation',
					'container' => 'ul',
					'list_item_class' => 'nav-item',
					'link_class' => 'nav-link link-dark px-2'
				)
			);
			?>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-9">
