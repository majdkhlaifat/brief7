<?php

/**
 * Title: Footer
 * Slug: skincues-lite/footer
 * Categories: skincues-lite, footer
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-footer wp-block-site-generator"><!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:site-title {"textAlign":"center"} /-->

				<!-- wp:site-tagline {"textAlign":"center"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">
				<?php
				printf(
					/* translators: %1$s: Copyright html symbol,  %2$s: Year, %3$s: Vendor link */
					esc_html_x('Copyright %1$s %2$s %3$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'skincues-lite'),
					'&copy;',
					esc_attr(date_i18n(__('Y', 'skincues-lite'))),
					'<a href="' . esc_url(home_url('/')) . '">' . esc_attr(get_bloginfo('name', 'display')) . '</a><span class="sep"> | </span>Skincues Lite by <a target="_blank" href="https://catchthemes.com">Catch Themes</a>'
				);
				?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
