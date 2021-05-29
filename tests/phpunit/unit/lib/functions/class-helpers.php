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

namespace Dkjensen\GenesisStarterTheme\Tests\Unit;

use Brain\Monkey\Functions;
use function Dkjensen\GenesisStarterTheme\Functions\get_theme_url;
use function Dkjensen\GenesisStarterTheme\Functions\get_theme_dir;

/**
 * Class Tests_SampleTest
 *
 * @package KnowTheCode\StarterPlugin\Tests\PHP\Unit
 */
class Helpers extends Test_Case {

	/**
	 * Setup test case.
	 *
	 * @since 3.5.0
	 *
	 * @return void
	 */
	protected function setUp() {
		parent::setUp();

		require_once CHILD_THEME_LIB_DIR . 'functions/helpers.php';
	}
}
