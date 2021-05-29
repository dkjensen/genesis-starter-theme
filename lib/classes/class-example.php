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

/**
 * Example Class.
 *
 * This is an example class to demonstrate the class autoloader. Autoloading classes
 * saves you from having `require` calls throughout your theme. To test that this
 * class is loading correctly, place the following in your functions.php file:
 *
 * ```
 * $example = new \Dkjensen\GenesisStarterTheme\Example();
 * $example->print_name();
 * ```
 *
 * If you have added additional classes to the `lib/classes` directory, you will need
 * to run the `composer dump --no-dev` command from the terminal to regenerate the
 * Composer autoloader files so that your new classes are loaded automatically.
 *
 * @package Dkjensen\GenesisStarterTheme
 */
class Example {

	/**
	 * Example property.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Example constructor.
	 *
	 * @since 3.5.0
	 *
	 * @return void
	 */
	public function __construct() {
		$this->name = __CLASS__;
	}

	/**
	 * Example method.
	 *
	 * @since 3.5.0
	 *
	 * @return void
	 */
	public function print_name() {
		print esc_html( $this->name );
	}
}
