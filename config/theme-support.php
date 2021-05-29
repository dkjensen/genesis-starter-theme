<?php
/**
 * Genesis Starter Theme.
 *
 * @package   Dkjensen\GenesisStarterTheme
 * @link      https://dkjensen.com
 * @author    David Jensen
 * @copyright Copyright © 2021 David Jensen
 * @license   GPL-3.0
 */

namespace Dkjensen\GenesisStarterTheme;

use function Dkjensen\GenesisStarterTheme\Functions\get_theme_url;

return array(
	'add'    => array(
		'align-wide',
		'automatic-feed-links',
		'custom-header'            => array(
			'header-selector'  => '.hero-section',
			'default_image'    => get_theme_url() . 'assets/img/hero.jpg',
			'header-text'      => false,
			'width'            => 1280,
			'height'           => 720,
			'flex-height'      => true,
			'flex-width'       => true,
			'uploads'          => true,
			'video'            => true,
			'wp-head-callback' => __NAMESPACE__ . '\Functions\header',
		),
		'editor-styles',
		'front-page-widgets'       => 5,
		'genesis-accessibility'    => array(
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links',
		),
		'genesis-after-entry-widget-area',
		'genesis-custom-logo'      => array(
			'height'      => 60,
			'width'       => 120,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array(
				'.site-title',
				'.site-description',
			),
		),
		'genesis-footer-widgets'   => 3,
		'genesis-menus'            => array(
			'primary'   => __( 'Header Menu', 'genesis-starter-theme' ),
			'secondary' => __( 'After Header Menu', 'genesis-starter-theme' ),
		),
		'genesis-structural-wraps' => array(
			'header',
			'menu-secondary',
			'hero-section',
			'footer-widgets',
			'front-page-widgets',
		),
		'gutenberg'                => array(
			'wide-images' => true,
		),
		'hero-section',
		'html5'                    => array(
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form',
		),
		'post-thumbnails',
		'responsive-embeds',
		// phpcs:ignore Squiz.PHP.CommentedOutCode.Found
		// 'sticky-header',
		// phpcs:ignore Squiz.PHP.CommentedOutCode.Found
		// 'transparent-header',
		'woocommerce',
		'wc-product-gallery-zoom',
		'wc-product-gallery-lightbox',
		'wc-product-gallery-slider',
		'wp-block-styles',
	),
	'remove' => array(),
);
