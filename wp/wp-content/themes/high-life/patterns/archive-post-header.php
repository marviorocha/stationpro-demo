<?php
 /**
  * Title: Archive Post Header
  * Slug: high-life/archive-post-header
  * Categories: high-life, header
  */
?>

<!-- wp:group {"align":"full","className":"no-margin-top header-media-inner-post","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/inner-header-media.jpg' )); ?>","dimRatio":50,"className":"is-dark"} -->
		<div class="wp-block-cover is-dark">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
			<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/inner-header-media.jpg' )); ?>" data-object-fit="cover"/>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"className":"alignwide"} -->
					<div class="wp-block-group alignwide">
						<!-- wp:query-title {"type":"archive","textAlign":"center"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->