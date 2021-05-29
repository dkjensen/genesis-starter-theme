<?php
/**
 * Genesis Starter Theme.
 *
 * @package   Dkjensen\GenesisStarterTheme
 * @link      https://dkjensen.com
 * @author    David Jensen
 * @copyright Copyright © 2021 David Jensenen
 * @license   GPL-3.0
 */

namespace Dkjensen\GenesisStarterTheme;

$genesis_front_page_widgets = array();
$genesis_theme_supports     = genesis_get_config( 'theme-support' )['add'];

/* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals */
for ( $i = 1; $i <= $genesis_theme_supports['front-page-widgets']; $i++ ) {
	$genesis_front_page_widgets[] = array(
		'id'          => 'front-page-' . $i,
		'name'        => __( 'Front Page ', 'genesis-starter-theme' ) . $i,
		/* translators: The front page widget area number. */
		'description' => \sprintf( __( 'The Front Page %s widget area.', 'genesis-starter-theme' ), $i ),
	);
}

return array(
	'add'    => \array_merge_recursive(
		array(
			array(
				'id'          => 'before-header',
				'name'        => __( 'Before Header', 'genesis-starter-theme' ),
				'description' => __( 'The Before Header widget area.', 'genesis-starter-theme' ),
			),
			array(
				'id'          => 'before-footer',
				'name'        => __( 'Before Footer', 'genesis-starter-theme' ),
				'description' => __( 'The Before Footer widget area.', 'genesis-starter-theme' ),
			),
		),
		$genesis_front_page_widgets
	),
	'remove' => array(
		'sidebar-alt',
	),
);
