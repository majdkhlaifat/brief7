<?php

/**
 * Title: Recent Products
 * Slug: skincues-lite/products-recent
 * Categories: skincues-lite, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-products products-recent","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-products products-recent">
	<!-- wp:group {"align":"wide","className":"alignwide wp-block-group-heading"} -->
	<div class="wp-block-group alignwide wp-block-group-heading"><!-- wp:columns {"verticalAlignment":"bottom"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom"} -->
			<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"textAlign":"left"} -->
				<h2 class="wp-block-heading has-text-align-left"><?php esc_html_e('Our Featured', 'skincues-lite'); ?><br><?php esc_html_e('Products', 'skincues-lite'); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom"} -->
			<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"layout":{"type":"constrained","contentSize":"500px","justifyContent":"right"}} -->
				<div class="wp-block-group"><!-- wp:paragraph {"align":"left","fontSize":"content-heading"} -->
					<p class="has-text-align-left has-content-heading-font-size"><?php esc_html_e('Brighten your complexion, hydrate dry skin,', 'skincues-lite'); ?><br><?php esc_html_e('and combat acne with our best-selling products.', 'skincues-lite'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"wp-block-group-content"} -->
	<div class="wp-block-group alignwide wp-block-group-content"><!-- wp:woocommerce/product-new {"columns":3,"rows":1,"align":"wide"} /--></div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
