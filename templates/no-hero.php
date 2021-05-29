<?php
/**
 * Template Name: No Hero
 *
 * Template Post Type: post, page, product, portfolio
 *
 * @package   Dkjensen\GenesisStarterTheme
 * @link      https://dkjensen.com
 * @author    David Jensen
 * @copyright Copyright © 2021 David Jensenen
 * @license   GPL-3.0
 */

// Removes hero section.
\remove_theme_support( 'hero-section' );

// Runs the Genesis loop.
genesis();
