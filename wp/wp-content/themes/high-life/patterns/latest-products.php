<?php
 /**
  * Title: Latest Products
  * Slug: high-life/latest-products
  * Categories: high-life, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-latest-products","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-latest-products">
	<!-- wp:group {"align":"wide","className":"wp-block-group-heading"} -->
	<div class="wp-block-group alignwide wp-block-group-heading">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="has-text-align-center"><?php esc_html_e ( 'Latest Products', 'high-life' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","className":" wp-latest-products-block"} -->
	<div class="wp-block-group alignwide wp-latest-products-block">
		<!-- wp:woocommerce/product-new {"columns":4,"rows":1,"contentVisibility":{"image":true,"title":true,"price":true,"rating":false,"button":false},"align":"wide"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
