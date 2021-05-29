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

namespace Dkjensen\GenesisStarterTheme\Tests\Integration;

/**
 * Class Example_Test
 *
 * @package Dkjensen\GenesisStarterTheme\Tests\Integration
 */
class Example_Test extends \WP_UnitTestCase {

	/**
	 * Description of expected behavior.
	 *
	 * @since 3.5.0
	 *
	 * @return void
	 */
	public function test_it_works() {
		$this->assertTrue( \function_exists( 'do_action' ) );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 3.5.0
	 *
	 * @return void
	 */
	public function test_wp_phpunit_is_loaded_via_composer() {
		$this->assertContains(
			'vendor',
			getenv( 'WP_PHPUNIT__DIR' )
		);
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 3.5.0
	 *
	 * @return void
	 */
	public function test_true_is_true() {
		$this->assertTrue( true );
		$this->assertFalse( false );
	}

	/**
	 * Description of expected behavior.
	 *
	 * @since 3.5.0
	 *
	 * @return void
	 */
	public function test_if_genesis_is_active() {
		$this->assertTrue( \function_exists( 'genesis' ) );
	}
}
