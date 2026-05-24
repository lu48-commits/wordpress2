<?php
/**
 * LeoLeo B2B theme setup.
 *
 * @package LeoLeo_B2B
 */

if (!defined('ABSPATH')) {
    exit;
}

function leoleo_b2b_setup(): void
{
    load_theme_textdomain('leoleo-b2b', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('woocommerce');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/main.css');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'leoleo-b2b'),
        'footer'  => __('Footer Menu', 'leoleo-b2b'),
    ));
}
add_action('after_setup_theme', 'leoleo_b2b_setup');

function leoleo_b2b_assets(): void
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'leoleo-b2b-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        $theme_version
    );

    wp_enqueue_script(
        'leoleo-b2b-rfq',
        get_template_directory_uri() . '/assets/js/rfq.js',
        array(),
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'leoleo_b2b_assets');

function leoleo_b2b_widgets(): void
{
    register_sidebar(array(
        'name'          => __('RFQ Sidebar', 'leoleo-b2b'),
        'id'            => 'rfq-sidebar',
        'description'   => __('Optional widgets shown near the RFQ section.', 'leoleo-b2b'),
        'before_widget' => '<section class="rfq-widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'leoleo_b2b_widgets');

function leoleo_b2b_fallback_menu(): void
{
    $items = array(
        '#capabilities' => __('Capabilities', 'leoleo-b2b'),
        '#products'     => __('Products', 'leoleo-b2b'),
        '#process'      => __('Process', 'leoleo-b2b'),
        '#quality'      => __('Quality', 'leoleo-b2b'),
        '#rfq'          => __('RFQ', 'leoleo-b2b'),
    );

    echo '<ul class="menu fallback-menu">';
    foreach ($items as $url => $label) {
        printf('<li><a href="%s">%s</a></li>', esc_url(home_url('/') . $url), esc_html($label));
    }
    echo '</ul>';
}

function leoleo_b2b_front_page_data(): array
{
    return array(
        'trust' => array(
            array('value' => __('Low MOQ', 'leoleo-b2b'), 'label' => __('Flexible trial orders for new collections', 'leoleo-b2b')),
            array('value' => __('7-14 days', 'leoleo-b2b'), 'label' => __('Typical sample lead time after details are confirmed', 'leoleo-b2b')),
            array('value' => __('AQL QC', 'leoleo-b2b'), 'label' => __('Inline and final inspection before shipment', 'leoleo-b2b')),
            array('value' => __('Global export', 'leoleo-b2b'), 'label' => __('Carton, label, packing list, and logistics support', 'leoleo-b2b')),
        ),
        'capabilities' => array(
            array('number' => '01', 'title' => __('OEM Manufacturing', 'leoleo-b2b'), 'copy' => __('Produce from your tech pack, reference sample, measurements, artwork, trims, labels, and packaging rules.', 'leoleo-b2b')),
            array('number' => '02', 'title' => __('ODM Development', 'leoleo-b2b'), 'copy' => __('Build collections faster with fabric options, pattern adjustments, sample room support, and trend-driven silhouettes.', 'leoleo-b2b')),
            array('number' => '03', 'title' => __('Private Label', 'leoleo-b2b'), 'copy' => __('Custom neck labels, hang tags, wash labels, polybags, cartons, barcode stickers, and retail-ready packing.', 'leoleo-b2b')),
            array('number' => '04', 'title' => __('Production Management', 'leoleo-b2b'), 'copy' => __('Clear timelines for sample approval, fabric booking, cutting, sewing, finishing, inspection, and dispatch.', 'leoleo-b2b')),
        ),
        'products' => array(
            array('image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=900&q=80', 'title' => __('T-Shirts & Tops', 'leoleo-b2b'), 'copy' => __('Cotton, blends, heavyweight jersey, crop tops, polos, and graphic programs.', 'leoleo-b2b')),
            array('image' => 'https://images.unsplash.com/photo-1578587018452-892bacefd3f2?auto=format&fit=crop&w=900&q=80', 'title' => __('Hoodies & Sweatshirts', 'leoleo-b2b'), 'copy' => __('Fleece, terry, pigment dye, embroidery, applique, puff print, and streetwear fits.', 'leoleo-b2b')),
            array('image' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?auto=format&fit=crop&w=900&q=80', 'title' => __('Jackets & Outerwear', 'leoleo-b2b'), 'copy' => __('Windbreakers, workwear jackets, padded pieces, woven shells, and seasonal capsules.', 'leoleo-b2b')),
            array('image' => 'https://images.unsplash.com/photo-1556906781-9a412961c28c?auto=format&fit=crop&w=900&q=80', 'title' => __('Active & Lifestyle', 'leoleo-b2b'), 'copy' => __('Performance knits, yoga sets, joggers, shorts, athleisure capsules, and teamwear.', 'leoleo-b2b')),
        ),
    );
}
