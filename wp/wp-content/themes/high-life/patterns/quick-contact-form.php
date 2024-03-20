<?php
 /**
  * Title: Quick Contact Form
  * Slug: high-life/quick-contact-form
  * Categories: high-life, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-quick-contact","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-quick-contact">
	<!-- wp:media-text {"align":"wide","mediaLink":"<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/about-author.jpg' )); ?>","mediaType":"image"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile">
		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/about-author.jpg' )); ?>" alt=""/>
		</figure>
		<div class="wp-block-media-text__content">
			<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"}}} -->
			<h2 class="wp-block-heading" style="font-style:normal;font-weight:700;text-transform:capitalize">
				<strong><?php esc_html_e ( 'Lets Talk.', 'high-life' ); ?></strong>
			</h2>
			<!-- /wp:heading -->
      <!-- wp:paragraph -->
      <p><?php esc_html_e ( 'An online quick contact form is a quick and easy way to collect information from website visitors.', 'high-life' ); ?></p>
      <!-- /wp:paragraph -->
			<!-- wp:contact-form-7/contact-form-selector {"hash":"5882aea","title":"Contact form 1"} -->
			<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="5882aea" title="Contact form 1"]</div>
			<!-- /wp:contact-form-7/contact-form-selector -->
		</div>
	</div>
	<!-- /wp:media-text -->
</div>
<!-- /wp:group -->