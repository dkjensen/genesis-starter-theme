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

\add_filter( 'genesis_comment_list_args', __NAMESPACE__ . '\\setup_comments_gravatar' );
/**
 * Modify size of the Gravatar in the entry comments.
 *
 * @since 3.5.0
 *
 * @param array $args Genesis comment list arguments.
 *
 * @return mixed
 */
function setup_comments_gravatar( array $args ) {
	$args['avatar_size'] = \genesis_get_config( 'genesis-settings' )['avatar_size'];

	return $args;
}
