<?php
/**
 * Block styles.
 *
 * @package hizzle
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function hizzle_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'hizzle-flat-button',
			'label' => __( 'Flat button', 'hizzle' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'hizzle-svg-separator-bottom',
			'label' => __( 'SVG Separator', 'hizzle' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/cover',
		array(
			'name'  => 'hizzle-svg-separator-bottom',
			'label' => __( 'SVG Separator', 'hizzle' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation-link',
		array(
			'name'  => 'hizzle-navigation-link-button',
			'label' => __( 'Button', 'hizzle' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list-item',
		array(
			'name'  => 'hizzle-list-underline',
			'label' => __( 'Underlined', 'hizzle' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list-item',
		array(
			'name'  => 'hizzle-list-checkmark',
			'label' => __( 'Checked', 'hizzle' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list-item',
		array(
			'name'  => 'hizzle-list-crossed',
			'label' => __( 'Crossed', 'hizzle' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list-item',
		array(
			'name'  => 'hizzle-list-arrow',
			'label' => __( 'Arrow', 'hizzle' ),
		)
	);
}
add_action( 'init', 'hizzle_register_block_styles' );
