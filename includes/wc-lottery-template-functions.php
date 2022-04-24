<?php

if ( ! function_exists( 'woocommerce_lottery_participate_template' ) ) {

	/**
	 * Load participate template part
	 *
	 */
	function woocommerce_lottery_participate_template() {
		global $product;

		if ( $product->get_type() === 'lottery' ){
			wc_get_template( 'single-product/participate.php' );
		}

	}

}

if ( ! function_exists( 'woocommerce_lottery_winners_template' ) ) {
	/**
	 * Load winners template part
	 *
	 */
	function woocommerce_lottery_winners_template() {
		global $product;

		if ( $product->get_type() === 'lottery' ){
			wc_get_template( 'single-product/winners.php' );
		}
	}
}

if ( ! function_exists( 'woocommerce_lottery_add_to_cart_template' ) ) {
	/**
	 * Load lottery product add to cart template part.
	 *
	 */
	function woocommerce_lottery_add_to_cart_template() {
		wc_get_template( 'single-product/add-to-cart/lottery.php' );
	}
}

if ( ! function_exists( 'woocommerce_lottery_countdown_template' ) ) {
	/**
	 * Load lottery product add to cart template part.
	 *
	 */
	function woocommerce_lottery_countdown_template() {
		wc_get_template( 'global/lottery-countdown.php' );
	}
}

if ( ! function_exists( 'woocommerce_lottery_info_template' ) ) {
	/**
	 * Load lottery product add to cart template part.
	 *
	 */
	function woocommerce_lottery_info_template() {
		wc_get_template( 'single-product/lottery-info.php' );
	}
}

if ( ! function_exists( 'woocommerce_lottery_info_future_template' ) ) {
	/**
	 * Load lottery product add to cart template part.
	 *
	 */
	function woocommerce_lottery_info_future_template() {
		wc_get_template( 'single-product/lottery-info-future.php' );
	}
}
if ( ! function_exists( 'woocommerce_lottery_progressbar_template' ) ) {
	/**
	 * Load lottery product add to cart template part.
	 *
	 */
	function woocommerce_lottery_progressbar_template () {
		wc_get_template( 'global/lottery-progressbar.php' );
	}
}