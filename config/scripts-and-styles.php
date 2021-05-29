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

use function Dkjensen\GenesisStarterTheme\Functions\get_theme_url;

$genesis_asset_url    = \trailingslashit( get_theme_url() . 'assets' );
$genesis_google_fonts = \implode( '|', \genesis_get_config( 'google-fonts' ) );

return array(
	'add'    => array(
		array(
			'handle' => \genesis_get_theme_handle() . '-editor',
			'src'    => $genesis_asset_url . 'js/editor.js',
			'deps'   => array( 'wp-blocks' ),
			'editor' => true,
		),
		array(
			'handle'    => \genesis_get_theme_handle() . '-main',
			'src'       => $genesis_asset_url . 'js/main.js',
			'condition' => function () {
				return ! \genesis_is_amp();
			},
		),
		array(
			'handle' => \genesis_get_theme_handle() . '-main',
			'src'    => $genesis_asset_url . 'css/main.css',
		),
		array(
			'handle'    => \genesis_get_theme_handle() . '-woocommerce',
			'src'       => $genesis_asset_url . 'css/woocommerce.css',
			'condition' => function () {
				return \class_exists( 'WooCommerce' );
			},
		),
		array(
			'handle' => \genesis_get_theme_handle() . '-google-fonts',
			'src'    => "//fonts.googleapis.com/css?family=$genesis_google_fonts&display=swap",
			'editor' => 'both',
		),
	),
	'remove' => array(
		'superfish',
	),
);
