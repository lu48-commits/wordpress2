<?php
/**
 * Front page template.
 *
 * @package LeoLeo_B2B
 */

get_header();
$data = leoleo_b2b_front_page_data();
?>
<main id="top">
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-media" role="img" aria-label="<?php esc_attr_e('Apparel production table with folded garments and fabric swatches', 'leoleo-b2b'); ?>"></div>
        <div class="hero-content">
            <p class="eyebrow"><?php esc_html_e('Premium Blanks / OEM / Private Label', 'leoleo-b2b'); ?></p>
            <h1 id="hero-title"><?php esc_html_e('Blank apparel built for brands.', 'leoleo-b2b'); ?></h1>
            <p class="hero-copy"><?php esc_html_e('LeoLeo Factory develops premium blank and custom apparel for wholesale buyers, decorators, merch teams, and fashion brands that need dependable production.', 'leoleo-b2b'); ?></p>
            <div class="hero-actions">
                <a class="button primary" href="#rfq"><?php esc_html_e('Create Account / RFQ', 'leoleo-b2b'); ?></a>
                <a class="button ghost" href="#products"><?php esc_html_e('View Categories', 'leoleo-b2b'); ?></a>
            </div>
        </div>
    </section>

    <section class="trust-strip" aria-label="<?php esc_attr_e('Manufacturing highlights', 'leoleo-b2b'); ?>">
        <?php foreach ($data['trust'] as $item) : ?>
            <div><strong><?php echo esc_html($item['value']); ?></strong><span><?php echo esc_html($item['label']); ?></span></div>
        <?php endforeach; ?>
    </section>

    <section id="capabilities" class="section split">
        <div class="section-intro">
            <p class="eyebrow"><?php esc_html_e('Wholesale Resources', 'leoleo-b2b'); ?></p>
            <h2><?php esc_html_e('Premium blanks, custom labels, and factory-direct production.', 'leoleo-b2b'); ?></h2>
        </div>
        <div class="capability-grid">
            <?php foreach ($data['capabilities'] as $capability) : ?>
                <article>
                    <span class="icon"><?php echo esc_html($capability['number']); ?></span>
                    <h3><?php echo esc_html($capability['title']); ?></h3>
                    <p><?php echo esc_html($capability['copy']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="products" class="section product-section">
        <div class="section-heading">
            <p class="eyebrow"><?php esc_html_e('Featured', 'leoleo-b2b'); ?></p>
            <h2><?php esc_html_e('Core blank apparel categories ready for decoration.', 'leoleo-b2b'); ?></h2>
        </div>
        <div class="product-grid">
            <?php foreach ($data['products'] as $product) : ?>
                <article class="product-card">
                    <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['title']); ?>">
                    <div>
                        <h3><?php echo esc_html($product['title']); ?></h3>
                        <p><?php echo esc_html($product['copy']); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="process" class="section process-section">
        <div class="section-heading">
            <p class="eyebrow"><?php esc_html_e('Grow Your Business', 'leoleo-b2b'); ?></p>
            <h2><?php esc_html_e('Leverage factory-direct blank apparel today.', 'leoleo-b2b'); ?></h2>
        </div>
        <ol class="timeline">
            <li><span>1</span><h3><?php esc_html_e('Brief & Quote', 'leoleo-b2b'); ?></h3><p><?php esc_html_e('Share style photos, tech packs, target fabric, quantity, logo method, destination, and launch date.', 'leoleo-b2b'); ?></p></li>
            <li><span>2</span><h3><?php esc_html_e('Sampling', 'leoleo-b2b'); ?></h3><p><?php esc_html_e('We confirm materials, pattern, workmanship, trims, labels, and fit before bulk production begins.', 'leoleo-b2b'); ?></p></li>
            <li><span>3</span><h3><?php esc_html_e('Bulk Production', 'leoleo-b2b'); ?></h3><p><?php esc_html_e('Fabric booking, cutting, sewing, embellishment, finishing, measurement checks, and progress updates.', 'leoleo-b2b'); ?></p></li>
            <li><span>4</span><h3><?php esc_html_e('Inspection & Export', 'leoleo-b2b'); ?></h3><p><?php esc_html_e('Final QC, packaging, carton marks, export documents, and logistics coordination for your shipment.', 'leoleo-b2b'); ?></p></li>
        </ol>
    </section>

    <section id="quality" class="section quality-band">
        <div>
            <p class="eyebrow"><?php esc_html_e('Buyer Confidence', 'leoleo-b2b'); ?></p>
            <h2><?php esc_html_e('Built for long-term B2B supply, not one-off transactions.', 'leoleo-b2b'); ?></h2>
            <p><?php esc_html_e('Strong apparel factory websites make procurement easy by answering MOQ, sampling, customization, QC, certification, and shipping questions early. LeoLeo Factory follows that buyer-first structure.', 'leoleo-b2b'); ?></p>
        </div>
        <div class="quality-list" aria-label="<?php esc_attr_e('Quality and compliance checklist', 'leoleo-b2b'); ?>">
            <span><?php esc_html_e('Fabric inspection', 'leoleo-b2b'); ?></span>
            <span><?php esc_html_e('Size spec checks', 'leoleo-b2b'); ?></span>
            <span><?php esc_html_e('Color fastness options', 'leoleo-b2b'); ?></span>
            <span><?php esc_html_e('Needle detection on request', 'leoleo-b2b'); ?></span>
            <span><?php esc_html_e('OEKO-TEX / GRS sourcing options', 'leoleo-b2b'); ?></span>
            <span><?php esc_html_e('BSCI / WRAP factory options', 'leoleo-b2b'); ?></span>
        </div>
    </section>

    <section id="rfq" class="section rfq-section">
        <div class="rfq-copy">
            <p class="eyebrow"><?php esc_html_e('Start Your RFQ', 'leoleo-b2b'); ?></p>
            <h2><?php esc_html_e('Send project details and get a manufacturing plan.', 'leoleo-b2b'); ?></h2>
            <p><?php esc_html_e('The more detail you share, the faster the team can estimate sampling cost, MOQ, lead time, and bulk pricing.', 'leoleo-b2b'); ?></p>
            <div class="contact-panel"><span><?php esc_html_e('Email', 'leoleo-b2b'); ?></span><a href="mailto:sales@leoleofactory.com">sales@leoleofactory.com</a></div>
            <?php if (is_active_sidebar('rfq-sidebar')) : ?>
                <?php dynamic_sidebar('rfq-sidebar'); ?>
            <?php endif; ?>
        </div>
        <form class="rfq-form" id="rfqForm">
            <label><?php esc_html_e('Name', 'leoleo-b2b'); ?><input name="name" type="text" autocomplete="name" required></label>
            <label><?php esc_html_e('Business Email', 'leoleo-b2b'); ?><input name="email" type="email" autocomplete="email" required></label>
            <label><?php esc_html_e('Product Category', 'leoleo-b2b'); ?><select name="category" required><option value=""><?php esc_html_e('Select a category', 'leoleo-b2b'); ?></option><option><?php esc_html_e('T-Shirts & Tops', 'leoleo-b2b'); ?></option><option><?php esc_html_e('Hoodies & Sweatshirts', 'leoleo-b2b'); ?></option><option><?php esc_html_e('Jackets & Outerwear', 'leoleo-b2b'); ?></option><option><?php esc_html_e('Active & Lifestyle', 'leoleo-b2b'); ?></option><option><?php esc_html_e('Other Apparel', 'leoleo-b2b'); ?></option></select></label>
            <label><?php esc_html_e('Estimated Quantity', 'leoleo-b2b'); ?><input name="quantity" type="text" placeholder="<?php esc_attr_e('e.g. 300 pcs per color', 'leoleo-b2b'); ?>" required></label>
            <label class="full"><?php esc_html_e('Project Details', 'leoleo-b2b'); ?><textarea name="details" rows="5" placeholder="<?php esc_attr_e('Fabric, size range, logo method, target price, destination, launch date', 'leoleo-b2b'); ?>"></textarea></label>
            <button class="button primary full" type="submit"><?php esc_html_e('Send RFQ by Email', 'leoleo-b2b'); ?></button>
            <p class="form-note" id="formNote" role="status"></p>
        </form>
    </section>
</main>
<?php
get_footer();
