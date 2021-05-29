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

return array(
	'script' => array(
		'mainMenu'         => sprintf( '<span class="hamburger"> </span><span class="screen-reader-text">%s</span>', __( 'Menu', 'genesis-starter-theme' ) ),
		'menuIconClass'    => null,
		'subMenuIconClass' => null,
		'menuClasses'      => array(
			'combine' => array(
				'.nav-primary',
				'.nav-secondary',
			),
		),
		'menuAnimation'    => array(
			'effect'   => 'fadeToggle',
			'duration' => 'fast',
			'easing'   => 'swing',
		),
		'subMenuAnimation' => array(
			'effect'   => 'slideToggle',
			'duration' => 'fast',
			'easing'   => 'swing',
		),
	),
	'extras' => array(
		'media_query_width' => '896px',
	),
);
