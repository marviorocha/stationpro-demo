<?php
/**
 * Title: Featured Category
 * Slug: high-life/featured-category
 * Categories: high-life, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-featured-category","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-featured-category">
	<!-- wp:group {"align":"wide","className":"wp-block-group-heading","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide wp-block-group-heading">
		<!-- wp:columns {"verticalAlignment":null,"align":"full"} -->
		<div class="wp-block-columns alignfull">
			<!-- wp:column {"width":"66.333%"} -->
			<div class="wp-block-column" style="flex-basis:66.333%">
				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:heading -->
					<h2 class="wp-block-heading"><?php esc_html_e ( 'Featured Category', 'high-life' ); ?></h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p><?php esc_html_e ( 'Exploring Ideas of your own VR World Reality own VR Exploring Ideas of your own VR World Reality own VR.', 'high-life' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"bottom","width":"33.3333%"} -->
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.3333%">
				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button">
							<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e ( 'View Products', 'high-life' ); ?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","className":"wp-block-seller-categories","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide wp-block-seller-categories">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:woocommerce/featured-category /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:woocommerce/featured-category /-->
				<!-- wp:woocommerce/featured-category /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->