<?php

/**
 * Title: Header Media Primary
 * Slug: skincues-lite/header-media-primary
 * Categories: skincues-lite, page
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px","padding":{"top":"0","bottom":"0"}}},"className":"wp-block-section wp-block-header-media-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-header-media-primary" style="padding-top:0;padding-bottom:0"><!-- wp:cover {"overlayColor":"primary","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
                <div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"header-title-wrapper","layout":{"type":"constrained","justifyContent":"center"}} -->
                    <div class="wp-block-group header-title-wrapper"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"header-animate","fontSize":"huge"} -->
                        <h2 class="wp-block-heading has-text-align-left header-animate has-huge-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Re-invent', 'skincues-lite'); ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"header-animate","fontSize":"huge"} -->
                        <h2 class="wp-block-heading has-text-align-left header-animate has-huge-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Skin &amp; Cosmetics', 'skincues-lite'); ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"14px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:14px"><!-- wp:button {"textAlign":"center","className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e('Shop Now', 'skincues-lite'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull"><!-- wp:image {"align":"full","sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image alignfull size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/header-image.jpg')); ?>" alt="" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
