<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'greenfield' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title {"level":0} /-->

					<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">' .
					sprintf(
						/* Translators: Greenfield link. */
						esc_html__( 'Proudly created by %s', 'greenfield' ),
						'<a href="' . esc_url( __( 'http://greenfield-dev-com.ibrave.host', 'greenfield' ) ) . '" rel="nofollow">GreenField Development</a>'
					) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
