<?php

/**
 * Title: about
 * Slug: skincues-lite/about
 * Categories: skincues-lite, page
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"primary","className":"wp-block-section wp-block-about","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-about has-primary-background-color has-background"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|110","left":"var:preset|spacing|110"}}}} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"width":"64%"} -->
			<div class="wp-block-column" style="flex-basis:64%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"className":"wp-block-group-heading-wrapper","layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide wp-block-group-heading-wrapper"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"className":"wp-block-group-heading"} -->
					<div class="wp-block-group alignwide wp-block-group-heading" style="margin-top:0px;margin-bottom:0px"><!-- wp:heading {"textAlign":"left","textColor":"background"} -->
						<h2 class="wp-block-heading has-text-align-left has-background-color has-text-color"><?php esc_html_e('About', 'skincues-lite'); ?><br><?php esc_html_e('Skincues Lite', 'skincues-lite'); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","textColor":"background","fontSize":"content-heading"} -->
						<p class="has-text-align-left has-background-color has-text-color has-content-heading-font-size"><?php esc_html_e('A proper skincare routine can help prevent or address common skin concerns, such as dryness, acne, wrinkles, and sun damage.', 'skincues-lite'); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"align":"left","textColor":"background","fontSize":"content-heading"} -->
						<p class="has-text-align-left has-background-color has-text-color has-content-heading-font-size"><?php esc_html_e('Skincare products can vary widely in their ingredients and formulations, and it is important to choose products that are appropriate for your skin type and concerns.', 'skincues-lite'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:image {"align":"left","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image alignleft size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/about-main.jpg')); ?>" alt="" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"bottom","width":"36%","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:36%"><!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"className":"wp-block-section-content","layout":{"type":"constrained"}} -->
				<div class="wp-block-group wp-block-section-content" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/about-small.jpg')); ?>" alt="" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
