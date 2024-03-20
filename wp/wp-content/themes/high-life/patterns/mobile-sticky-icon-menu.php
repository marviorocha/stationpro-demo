<?php
 /**
  * Title: Mobile Sticky Icon Menu
  * Slug: high-life/mobile-sticky-icon-menu
  * Categories: high-life, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-header-right  wp-mobile-icon-menu","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-header-right  wp-block-section wp-mobile-icon-menu">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"stat-block"} -->
			<div class="wp-block-group stat-block">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"wp-home-button"} -->
					<div class="wp-block-button wp-home-button">
						<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e ( 'Home', 'high-life' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"stat-block"} -->
			<div class="wp-block-group stat-block">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"wp-shop-button"} -->
					<div class="wp-block-button wp-shop-button">
						<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e ( 'Shop', 'high-life' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
				<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true,"className":"dummy-icon"} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"stat-block"} -->
			<div class="wp-block-group stat-block">
				<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
