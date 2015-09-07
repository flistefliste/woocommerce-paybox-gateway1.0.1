<?php
	/**
	 * Plugin Name: WooCommerce Paybox Payment Gateway
	 * Plugin URI: http://walliecreation.com/
	 * Description: Gateway e-commerce for Paybox. Initial release by SWO (Open Boutique). Partially recoded by V. Pintat to fit whith WooCommerce 2.4.6 
	 * Version: 1.0.1
	 * Author: Vincent Pintat
	 * Author URI: http://walliecreation.com/
	 * License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
	 *
	 * @package WordPress
	 * @author Vincent Pintat
	 * @since 0.1.0
	 */

	if(!defined('ABSPATH'))
		exit;

	function activate_paybox_gateway()
	{
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		if( !is_plugin_active('woocommerce/woocommerce.php') )
		{
			_e('WooCommerce must be installed and activated in order to use this plugin !', 'paybox_gateway');
			exit;
		}
		if( !class_exists('WC_Payment_Gateway') )
		{
			_e('An error as occured with WooCommerce: can not find gateway methods...', 'paybox_gateway');
			exit;
		}
	}
	register_activation_hook(__FILE__, 'activate_paybox_gateway');
	add_action('plugins_loaded', 'woocommerce_paybox_init', 0);

	function woocommerce_paybox_init()
	{
		if( class_exists('WC_Payment_Gateway') )
		{
			include_once( plugin_dir_path( __FILE__ ).'woocommerce_paybox_gateway.class.php' );
			include_once( plugin_dir_path( __FILE__ ).'shortcode_woocommerce_paybox_gateway.php' );
		} else
			exit;

		DEFINE('PLUGIN_DIR', plugins_url(basename(plugin_dir_path(__FILE__)), basename(__FILE__)));
		DEFINE('VERSION', '1.0.1');
		DEFINE('THANKS_SHORTCODE', 'woocommerce_paybox_gateway_thanks');

		

		add_shortcode( THANKS_SHORTCODE, 'WC_Shortcode_Paybox_Thankyou::get' );
		add_filter('woocommerce_payment_gateways', 'add_paybox_commerce_gateway');
	}

	/*
	 * Ajout de la "gateway" Paybox à woocommerce
	 */
	function add_paybox_commerce_gateway($methods)
	{
		$methods[] = 'WC_Paybox';
		return $methods;
	}

?>