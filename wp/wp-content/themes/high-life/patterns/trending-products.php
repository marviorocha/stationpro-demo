<?php
 /**
  * Title: Trending Products
  * Slug: high-life/trending-products
  * Categories: high-life, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-product-showcase"} -->
<div class="wp-block-group alignfull wp-block-section wp-product-showcase">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","className":"wp-block-group-heading"} -->
		<div class="wp-block-group alignwide wp-block-group-heading">
			<!-- wp:heading {"align":"wide"} -->
			<h2 class="alignwide">
			<?php esc_html_e ( 'Trending Products', 'high-life' ); ?>
		</h2>
		<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"wide","className":"wp-product-cateogry-block","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignwide wp-product-cateogry-block">
			<!-- wp:columns {"align":"full"} -->
			<div class="wp-block-columns alignfull">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:woocommerce/featured-product /-->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:woocommerce/featured-product /-->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:woocommerce/featured-product /-->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:woocommerce/featured-product /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->