<?php
/**
 * @package Polylang
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Don't access directly.
}

if ( $polylang->model->has_languages() ) {
	if ( $polylang->links_model instanceof PLL_Links_Abstract_Domain ) {
		$polylang->sitemaps = new PLL_Sitemaps_Domain( $polylang );
	} else {
		$polylang->sitemaps = new PLL_Sitemaps( $polylang );
	}
	$polylang->sitemaps->init();
}
