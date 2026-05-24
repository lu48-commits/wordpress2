<?php
/**
 * Default template.
 *
 * @package LeoLeo_B2B
 */

get_header();
?>
<main class="section content-index">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="entry-content"><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <h1><?php esc_html_e('LeoLeo Factory', 'leoleo-b2b'); ?></h1>
        <p><?php esc_html_e('Create a page and set it as your homepage, or use the built-in front page template.', 'leoleo-b2b'); ?></p>
    <?php endif; ?>
</main>
<?php
get_footer();
