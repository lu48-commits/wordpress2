<?php
/**
 * Main template file.
 *
 * @package ASColourInspired
 */

get_header();
?>
<main id="primary" class="site-main content-layout">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'content-card' ); ?>>
				<header class="entry-header">
					<?php the_title( '<h1>', '</h1>' ); ?>
				</header>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-media"><?php the_post_thumbnail( 'large' ); ?></div>
				<?php endif; ?>
				<div class="entry-content"><?php the_content(); ?></div>
			</article>
		<?php endwhile; ?>
		<?php the_posts_navigation(); ?>
	<?php else : ?>
		<article class="content-card">
			<h1><?php esc_html_e( 'Nothing found', 'ascolour-inspired' ); ?></h1>
			<p><?php esc_html_e( 'Start publishing products, pages, or journal posts from your WordPress dashboard.', 'ascolour-inspired' ); ?></p>
		</article>
	<?php endif; ?>
</main>
<?php
get_footer();
