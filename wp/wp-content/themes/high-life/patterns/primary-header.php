<?php
 /**
  * Title: Primary Header
  * Slug: high-life/primary-header
  * Categories: high-life, header
  */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"align":"full","className":"wp-block-main-header header-transparent","layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group alignfull wp-block-main-header header-transparent">
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dtiny)","top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dtiny)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignfull"
            style="padding-top:var(--wp--custom--spacing--tiny);padding-bottom:var(--wp--custom--spacing--tiny)">
            <!-- wp:group {"className":"wp-site-logo","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group wp-site-logo">
                <!-- wp:site-logo {"width":64} /-->
                <!-- wp:group -->
                <div class="wp-block-group">
                    <!-- wp:site-title {"textAlign":"left"} /-->
                    <!-- wp:site-tagline {"textAlign":"left","style":{"spacing":{"margin":{"top":"4px"}}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- wp:navigation {"icon":"menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} /-->
            <!-- wp:group {"className":"wp-header-right wp-block-menu","layout":{"type":"flex","allowOrientation":false}} -->
            <div class="wp-block-group wp-header-right wp-block-menu">
                <!-- wp:woocommerce/customer-account {"displayStyle":"icon_only"} /-->
                <!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true} /-->
                <!-- wp:search {"label":"Search our store","placeholder":"Search products…","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"},"className":"search-product"} /-->
                <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true,"className":"dummy-icon"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->