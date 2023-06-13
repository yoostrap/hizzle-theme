<?php
/**
 * Title: Footer links
 * Slug: hizzle/footer-links
 * Categories: text
 *
 * @package hizzle
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"}}},"textColor":"base","gradient":"hg-lawrencium","className":"has-contrast-background-color","layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-contrast-background-color has-base-color has-hg-lawrencium-gradient-background has-text-color has-background has-link-color has-small-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">

	<!-- wp:paragraph -->
	<p class="has-small-font-size">
		<?php
		printf(
			/* translators: %s: Copyright year, %2 is site title. */
			esc_html__( 'Copyright © %1$s %2$s', 'hizzle' ),
			esc_html( date_i18n( _x( 'Y', 'copyright date format', 'hizzle' ) ) ),
			esc_html( get_bloginfo( 'name' ) )
		);
		?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-logos-only"} -->
	<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
		<!-- wp:social-link {"url":"https://facebook.com","service":"facebook","label":"Facebook","rel":""} /-->
		<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
		<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
