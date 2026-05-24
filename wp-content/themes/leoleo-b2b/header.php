<?php
/**
 * Site header.
 *
 * @package LeoLeo_B2B
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo esc_attr__('LeoLeo Factory helps global fashion buyers develop OEM, ODM, and private label apparel from sampling to bulk production.', 'leoleo-b2b'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('LeoLeo Factory home', 'leoleo-b2b'); ?>">
        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <span class="brand-mark">LL</span>
            <span><?php bloginfo('name'); ?></span>
        <?php endif; ?>
    </a>

    <nav class="nav" aria-label="<?php esc_attr_e('Primary navigation', 'leoleo-b2b'); ?>">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'fallback_cb'    => 'leoleo_b2b_fallback_menu',
            'depth'          => 1,
        ));
        ?>
    </nav>

    <a class="header-cta" href="<?php echo esc_url(home_url('/#rfq')); ?>"><?php esc_html_e('Start a Project', 'leoleo-b2b'); ?></a>
</header>
