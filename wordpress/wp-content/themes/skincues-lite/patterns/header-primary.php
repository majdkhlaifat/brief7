<?php

/**
 * Title: Header Primary
 * Slug: skincues-lite/header-primary
 * Categories: skincues-lite, header
 */
?>

<!-- wp:group {"align":"full","className":"header wp-block-header-primary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull header wp-block-header-primary">
	<!-- wp:group {"align":"full","className":"wp-block-main-header","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-main-header">
		<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0rem","padding":{"bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dtiny)","top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dtiny)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--tiny);padding-bottom:var(--wp--custom--spacing--tiny)">

			<!-- wp:navigation {"className":"main-navigation","icon":"menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} /-->


			<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":"site-identity"} -->
			<div class="wp-block-group site-identity"><!-- wp:site-logo {"width":50,"shouldSyncIcon":true,"align":"center"} /-->

				<!-- wp:group -->
				<div class="wp-block-group"><!-- wp:site-title /-->

					<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0px"}}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}},"className":"wp-block-search-user-cart","layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
			<div class="wp-block-group wp-block-search-user-cart">

				<!-- wp:group {"className":"wp-custom-product-search","layout":{"type":"constrained"}} -->
				<div class="wp-block-group wp-custom-product-search"><!-- wp:group {"className":"wp-search-toggle","layout":{"type":"constrained"}} -->
					<div class="wp-block-group wp-search-toggle"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"icon-search"} -->
						<figure class="wp-block-image size-full icon-search"><a href="#"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/search.png')); ?>" alt="" /></a></figure>
						<!-- /wp:image -->

						<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"icon-close"} -->
						<figure class="wp-block-image size-full icon-close"><a href="#"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/close.png')); ?>" alt="" /></a></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"wp-custom-product-search-container","layout":{"type":"constrained"}} -->
					<div class="wp-block-group wp-custom-product-search-container"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"}} /--></div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only"} /-->

				<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
