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

namespace Dkjensen\GenesisStarterTheme\Structure;

// Reposition primary nav.
\remove_action( 'genesis_after_header', 'genesis_do_nav' );
\add_action( 'genesis_after_title_area', 'genesis_do_nav' );

// Reposition secondary nav.
\remove_action( 'genesis_after_header', 'genesis_do_subnav' );
\add_action( 'genesis_after_header_wrap', 'genesis_do_subnav' );

\add_filter( 'walker_nav_menu_start_el', __NAMESPACE__ . '\replace_hash_with_void', 999 );
/**
 * Replace # links with JavaScript void.
 *
 * @since 3.5.0
 *
 * @param string $menu_item item HTML.
 *
 * @return string
 */
function replace_hash_with_void( $menu_item ) {
	if ( \strpos( $menu_item, 'href="#"' ) !== false ) {
		$menu_item = \str_replace( 'href="#"', 'href="javascript:void(0);"', $menu_item );
	}

	return $menu_item;
}
