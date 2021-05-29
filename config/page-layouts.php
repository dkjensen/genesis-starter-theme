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

return array(
	'add'    => array(
		array(
			'id'    => 'narrow-content',
			'label' => __( 'Narrow Content', 'genesis-starter-theme' ),
			'img'   => get_theme_url() . 'assets/img/narrow-content.gif',
		),
	),
	'remove' => array(
		'content-sidebar-sidebar',
		'sidebar-sidebar-content',
		'sidebar-content-sidebar',
	),
);
