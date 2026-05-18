<?php
/**
 * AS Colour Inspired Commerce theme functions.
 *
 * @package ASColourInspired
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'ascolour_inspired_setup' ) ) {
	/**
	 * Register theme supports and menus.
	 */
	function ascolour_inspired_setup() {
		load_theme_textdomain( 'ascolour-inspired', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array(
			'height'      => 64,
			'width'       => 220,
			'flex-height' => true,
			'flex-width'  => true,
		) );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/main.css' );

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'ascolour-inspired' ),
			'footer'  => __( 'Footer Menu', 'ascolour-inspired' ),
		) );
	}
}
add_action( 'after_setup_theme', 'ascolour_inspired_setup' );

/**
 * Enqueue frontend assets.
 */
function ascolour_inspired_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'ascolour-inspired-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		$theme_version
	);

	wp_enqueue_script(
		'ascolour-inspired-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ascolour_inspired_scripts' );

/**
 * Register widget areas.
 */
function ascolour_inspired_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Newsletter', 'ascolour-inspired' ),
		'id'            => 'footer-newsletter',
		'description'   => __( 'Newsletter or contact signup area in the footer.', 'ascolour-inspired' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'ascolour_inspired_widgets_init' );

/**
 * Return product/category demo data for the front page.
 *
 * @return array<string,array<int,array<string,string>>>
 */
function ascolour_inspired_front_page_data() {
	return array(
		'categories' => array(
			array( 'title' => __( 'T-Shirts', 'ascolour-inspired' ), 'url' => '#shop-tshirts' ),
			array( 'title' => __( 'Headwear', 'ascolour-inspired' ), 'url' => '#shop-headwear' ),
			array( 'title' => __( 'Sweats', 'ascolour-inspired' ), 'url' => '#shop-sweats' ),
			array( 'title' => __( 'Active', 'ascolour-inspired' ), 'url' => '#shop-active' ),
		),
		'products'   => array(
			array( 'name' => __( 'Heavy Faded Tee', 'ascolour-inspired' ), 'meta' => __( 'Relaxed Fit - Heavy Weight', 'ascolour-inspired' ), 'price' => '$32.00' ),
			array( 'name' => __( 'Box Long Sleeve', 'ascolour-inspired' ), 'meta' => __( 'Oversized Fit - Mid Weight', 'ascolour-inspired' ), 'price' => '$42.00' ),
			array( 'name' => __( 'Relax Track Pants', 'ascolour-inspired' ), 'meta' => __( 'Relaxed Fit - Brushed Fleece', 'ascolour-inspired' ), 'price' => '$54.00' ),
			array( 'name' => __( 'Frame Two-Tone Cap', 'ascolour-inspired' ), 'meta' => __( 'High Profile - Curved Peak', 'ascolour-inspired' ), 'price' => '$24.00' ),
		),
	);
}

if ( ! function_exists( 'ascolour_inspired_primary_fallback_menu' ) ) {
	/**
	 * Fallback menu used before users create WordPress menus.
	 */
	function ascolour_inspired_primary_fallback_menu() {
		?>
		<ul id="primary-menu" class="menu">
			<li><a href="#men"><?php esc_html_e( 'Men', 'ascolour-inspired' ); ?></a></li>
			<li><a href="#women"><?php esc_html_e( 'Women', 'ascolour-inspired' ); ?></a></li>
			<li><a href="#kids"><?php esc_html_e( 'Kids', 'ascolour-inspired' ); ?></a></li>
			<li><a href="#headwear"><?php esc_html_e( 'Headwear', 'ascolour-inspired' ); ?></a></li>
			<li><a href="#outlet"><?php esc_html_e( 'Outlet', 'ascolour-inspired' ); ?></a></li>
			<li><a href="#about"><?php esc_html_e( 'About', 'ascolour-inspired' ); ?></a></li>
		</ul>
		<?php
	}
}
