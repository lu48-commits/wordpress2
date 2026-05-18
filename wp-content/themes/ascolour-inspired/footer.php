<?php
/**
 * Theme footer.
 *
 * @package ASColourInspired
 */
?>
<footer class="site-footer">
	<div class="footer-grid">
		<section>
			<h2><?php esc_html_e( 'Company', 'ascolour-inspired' ); ?></h2>
			<ul>
				<li><a href="#about"><?php esc_html_e( 'About Us', 'ascolour-inspired' ); ?></a></li>
				<li><a href="#locations"><?php esc_html_e( 'Showroom Locations', 'ascolour-inspired' ); ?></a></li>
				<li><a href="#responsibility"><?php esc_html_e( 'Social Responsibility', 'ascolour-inspired' ); ?></a></li>
			</ul>
		</section>
		<section>
			<h2><?php esc_html_e( 'Customer Service', 'ascolour-inspired' ); ?></h2>
			<ul>
				<li><a href="#faqs"><?php esc_html_e( 'FAQs', 'ascolour-inspired' ); ?></a></li>
				<li><a href="#shipping"><?php esc_html_e( 'Shipping', 'ascolour-inspired' ); ?></a></li>
				<li><a href="#returns"><?php esc_html_e( 'Returns', 'ascolour-inspired' ); ?></a></li>
			</ul>
		</section>
		<section>
			<h2><?php esc_html_e( 'Wholesale Resources', 'ascolour-inspired' ); ?></h2>
			<ul>
				<li><a href="#fabric"><?php esc_html_e( 'Fabric Range', 'ascolour-inspired' ); ?></a></li>
				<li><a href="#colour"><?php esc_html_e( 'Colour Range', 'ascolour-inspired' ); ?></a></li>
				<li><a href="#printers"><?php esc_html_e( 'Printers & Embroiderers', 'ascolour-inspired' ); ?></a></li>
			</ul>
		</section>
		<section class="newsletter-panel">
			<h2><?php esc_html_e( 'Stay Connected', 'ascolour-inspired' ); ?></h2>
			<p><?php esc_html_e( 'Get product launches, sale offers, and maker resources.', 'ascolour-inspired' ); ?></p>
			<?php if ( is_active_sidebar( 'footer-newsletter' ) ) : ?>
				<?php dynamic_sidebar( 'footer-newsletter' ); ?>
			<?php else : ?>
				<form class="newsletter-form" action="#" method="post">
					<label class="screen-reader-text" for="footer-email"><?php esc_html_e( 'Email address', 'ascolour-inspired' ); ?></label>
					<input id="footer-email" type="email" placeholder="<?php esc_attr_e( 'Email', 'ascolour-inspired' ); ?>">
					<button type="submit"><?php esc_html_e( 'Sign up', 'ascolour-inspired' ); ?></button>
				</form>
			<?php endif; ?>
		</section>
	</div>
	<div class="footer-bottom">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Original WordPress theme inspired by clean premium apparel storefronts.', 'ascolour-inspired' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
