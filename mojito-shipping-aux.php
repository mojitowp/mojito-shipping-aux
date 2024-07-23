<?php
/**
 * Mojito Shipping Auxiliar Plugin
 *
 * @package           Mojito_Shipping
 * @author            Mojito Team
 * @link              https://mojitowp.com/
 *
 * @wordpress-plugin
 * Plugin Name: Mojito Shipping Aux
 * Plugin URI: https://mojitowp.com/
 * Description: Mojito Shipping Auxiliar Plugin
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.4
 * Author: Mojito Team
 * Author URI: https://mojitowp.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mojito-shipping
 * Domain Path: /languages
 * WC requires at least: 8.2.0
 * WC tested up to: 9.0.2
 */

/**
 * If this file is called directly, abort.
 */
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Plugin activation
 */
register_activation_hook( __FILE__, function () {} );

/**
 * Plugin deactivation.
 */
register_deactivation_hook( __FILE__, function () {} );

/**
 * Compatibility with WooCommerce declarations
 */
add_action('before_woocommerce_init', function(){
    if ( class_exists( '\Automattic\WooCommerce\Utilities\FeaturesUtil' ) ) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
    }
});

/**
 * mojito_shipping_pymexpress_checkout_custom_rate
 * 
 * Permite modificar la etiqueta y el costo final de envío.
 * 
 * Predeterminado: true
 * Parámetros: array $rate, array $filter_params
 * 
 * https://mojitowp.com/documentacion/pymexpress/#mojito_shipping_pymexpress_checkout_custom_rate
 */
add_filter( 'mojito_shipping_pymexpress_checkout_custom_rate', function( $rate, $filter_params ) {

    return $rate;

}, 10, 2);