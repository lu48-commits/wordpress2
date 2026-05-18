<?php
/**
 * Theme header.
 *
 * @package ASColourInspired
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ascolour-inspired' ); ?></a>
<header class="site-header" data-header>
	<div class="announcement-bar">
		<span><?php esc_html_e( 'Premium blanks made for print, teams, and everyday wear', 'ascolour-inspired' ); ?></span>
	</div>
	<div class="header-inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
		</div>

		<button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false" data-menu-toggle>
			<span class="menu-toggle__bar"></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'ascolour-inspired' ); ?></span>
		</button>

		<nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'ascolour-inspired' ); ?>" data-menu>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
				'container'      => false,
				'fallback_cb'    => 'ascolour_inspired_primary_fallback_menu',
			) );
			?>
		</nav>

		<div class="header-actions" aria-label="<?php esc_attr_e( 'Store actions', 'ascolour-inspired' ); ?>">
			<a href="<?php echo esc_url( home_url( '/?s=' ) ); ?>"><?php esc_html_e( 'Search', 'ascolour-inspired' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/my-account/' ) ); ?>"><?php esc_html_e( 'Sign in', 'ascolour-inspired' ); ?></a>
			<a class="cart-link" href="<?php echo esc_url( function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' ) ); ?>"><?php esc_html_e( 'Cart', 'ascolour-inspired' ); ?></a>
		</div>
	</div>
</header>
