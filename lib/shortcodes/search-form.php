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

\add_shortcode( 'search_form', __NAMESPACE__ . '\search_form_shortcode' );
/**
 * Displays a search form.
 *
 * @since 3.5.0
 *
 * @return string
 */
function search_form_shortcode() {
	if ( \is_admin() ) {
		return false;
	}

	return \get_search_form( false );
}
