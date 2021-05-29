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

namespace Dkjensen\GenesisStarterTheme\Shortcodes;

\add_shortcode( 'hook', __NAMESPACE__ . '\hook_shortcode' );
/**
 * Creates a hook shortcode.
 *
 * @since 3.5.0
 *
 * @param array $atts Shortcode arguments.
 *
 * @return mixed
 */
function hook_shortcode( $atts ) {
	if ( \is_admin() ) {
		return false;
	}

	$atts = \shortcode_atts(
		array(
			'id' => 'custom',
		),
		$atts,
		'widget_area'
	);

	/* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals */
	return \do_action( $atts['id'] );
}
