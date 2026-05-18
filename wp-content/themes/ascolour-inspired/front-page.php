<?php
/**
 * Front page template.
 *
 * @package ASColourInspired
 */

get_header();
$data = ascolour_inspired_front_page_data();
?>
<main id="primary" class="site-main">
	<section class="split-hero" aria-label="<?php esc_attr_e( 'Featured outfits', 'ascolour-inspired' ); ?>">
		<article id="men" class="hero-card hero-card--stone">
			<div class="hero-art" aria-hidden="true"><span></span></div>
			<div class="hero-content">
				<p class="eyebrow"><?php esc_html_e( 'Men', 'ascolour-inspired' ); ?></p>
				<h1><?php esc_html_e( 'Heavyweight essentials, built to last.', 'ascolour-inspired' ); ?></h1>
				<p><?php esc_html_e( 'Structured tees, washed fleece, and premium caps for decoration-ready apparel programs.', 'ascolour-inspired' ); ?></p>
				<a class="button button--light" href="#featured"><?php esc_html_e( 'Shop mens', 'ascolour-inspired' ); ?></a>
			</div>
		</article>
		<article id="women" class="hero-card hero-card--charcoal">
			<div class="hero-art hero-art--second" aria-hidden="true"><span></span></div>
			<div class="hero-content">
				<p class="eyebrow"><?php esc_html_e( 'Women', 'ascolour-inspired' ); ?></p>
				<h2><?php esc_html_e( 'Clean silhouettes for modern uniforms.', 'ascolour-inspired' ); ?></h2>
				<p><?php esc_html_e( 'Soft blanks, relaxed layers, and retail-quality fits ready for your brand story.', 'ascolour-inspired' ); ?></p>
				<a class="button button--light" href="#featured"><?php esc_html_e( 'Shop womens', 'ascolour-inspired' ); ?></a>
			</div>
		</article>
	</section>

	<section class="category-rail" aria-label="<?php esc_attr_e( 'Popular categories', 'ascolour-inspired' ); ?>">
		<?php foreach ( $data['categories'] as $category ) : ?>
			<a class="category-pill" href="<?php echo esc_url( $category['url'] ); ?>"><?php echo esc_html( $category['title'] ); ?></a>
		<?php endforeach; ?>
	</section>

	<section class="brand-statement">
		<p><?php esc_html_e( 'Established for creators, teams, printers, and makers.', 'ascolour-inspired' ); ?></p>
		<h2><?php esc_html_e( 'Premium blank apparel with a refined wholesale shopping experience.', 'ascolour-inspired' ); ?></h2>
	</section>

	<section class="lookbook-grid" aria-label="<?php esc_attr_e( 'Lookbook locations', 'ascolour-inspired' ); ?>">
		<article class="lookbook-card lookbook-card--large">
			<div class="image-placeholder image-placeholder--warm" aria-hidden="true"></div>
			<h3><?php esc_html_e( 'Studio Uniforms - Los Angeles', 'ascolour-inspired' ); ?></h3>
		</article>
		<article class="lookbook-card">
			<div class="image-placeholder image-placeholder--cool" aria-hidden="true"></div>
			<h3><?php esc_html_e( 'Retail Essentials - Melbourne', 'ascolour-inspired' ); ?></h3>
		</article>
		<article class="lookbook-card">
			<div class="image-placeholder image-placeholder--green" aria-hidden="true"></div>
			<h3><?php esc_html_e( 'Maker Workwear - Auckland', 'ascolour-inspired' ); ?></h3>
		</article>
	</section>

	<section id="featured" class="featured-products">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e( 'Featured', 'ascolour-inspired' ); ?></p>
			<h2><?php esc_html_e( 'Best-selling premium blanks', 'ascolour-inspired' ); ?></h2>
		</div>
		<div class="product-grid">
			<?php foreach ( $data['products'] as $index => $product ) : ?>
				<article class="product-card">
					<div class="product-image product-image--<?php echo esc_attr( $index + 1 ); ?>" aria-hidden="true"></div>
					<h3><?php echo esc_html( $product['name'] ); ?></h3>
					<p><?php echo esc_html( $product['meta'] ); ?></p>
					<span><?php echo esc_html( $product['price'] ); ?></span>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section id="about" class="story-panels">
		<article>
			<div class="story-image story-image--1" aria-hidden="true"></div>
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Made better', 'ascolour-inspired' ); ?></p>
				<h2><?php esc_html_e( 'A polished apparel storefront for long-lasting basics.', 'ascolour-inspired' ); ?></h2>
				<p><?php esc_html_e( 'Use this theme as a WordPress home base for wholesale applications, catalogs, journal posts, and WooCommerce product collections.', 'ascolour-inspired' ); ?></p>
				<a class="text-link" href="#learn-more"><?php esc_html_e( 'Learn more about us', 'ascolour-inspired' ); ?></a>
			</div>
		</article>
		<article>
			<div class="story-image story-image--2" aria-hidden="true"></div>
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Grow your business', 'ascolour-inspired' ); ?></p>
				<h2><?php esc_html_e( 'Apply for wholesale access and start building your range.', 'ascolour-inspired' ); ?></h2>
				<p><?php esc_html_e( 'The bold account call-to-action mirrors modern apparel marketplaces while keeping all imagery original.', 'ascolour-inspired' ); ?></p>
				<a class="button" href="<?php echo esc_url( home_url( '/my-account/' ) ); ?>"><?php esc_html_e( 'Create account', 'ascolour-inspired' ); ?></a>
			</div>
		</article>
	</section>

	<section class="journal-section">
		<div class="section-heading">
			<p class="eyebrow"><?php esc_html_e( 'The Journal', 'ascolour-inspired' ); ?></p>
			<h2><?php esc_html_e( 'Industry news, product guides, and decoration resources.', 'ascolour-inspired' ); ?></h2>
		</div>
		<?php if ( have_posts() ) : ?>
			<div class="journal-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'journal-card' ); ?>>
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium_large' ); ?>
							<?php else : ?>
								<div class="journal-placeholder" aria-hidden="true"></div>
							<?php endif; ?>
							<h3><?php the_title(); ?></h3>
						</a>
						<?php the_excerpt(); ?>
					</article>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<p><?php esc_html_e( 'Publish posts to populate this journal area.', 'ascolour-inspired' ); ?></p>
		<?php endif; ?>
	</section>
</main>
<?php
get_footer();
