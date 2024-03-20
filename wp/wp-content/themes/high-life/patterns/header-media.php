<?php
 /**
  * Title: Header Media
  * Slug: high-life/header-media
  * Categories: high-life, header
  */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/header-media-bg.png' )); ?>","dimRatio":0,"isDark":false,"align":"full","className":"is-dark wp-block-custom-header-media wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull is-light is-dark wp-block-custom-header-media wp-block-section wp-block-no-padding">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/header-media-bg.png' )); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:media-text {"align":"wide","mediaPosition":"right","mediaType":"image"} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
				<div class="wp-block-media-text__content">
					<!-- wp:heading {"style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"var:preset|spacing|60"}}},"className":"has-text-color"} -->
					<h2 class="wp-block-heading has-text-color" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--60);margin-left:0">
				<?php esc_html_e ( 'Multi-Chain Next Generation Project', 'high-life' ); ?>				
								</h2>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"foreground","className":"has-text-color"} -->
					<p class="has-text-color has-foreground-color">
					<?php esc_html_e ( 'Exploring Ideas of your own VR World ity VR World Ideas Reality of you Reality own VR World Reality.', 'high-life' ); ?>
					</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"14px"}}}} -->
					<div class="wp-block-buttons" style="margin-top:14px">
						<!-- wp:button -->
						<div class="wp-block-button">
							<a class="wp-block-button__link wp-element-button">
								<?php esc_html_e ( 'Explore More', 'high-life' ); ?>
							</a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<figure class="wp-block-media-text__media">
					<img src="" alt=""/>
				</figure>
			</div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->