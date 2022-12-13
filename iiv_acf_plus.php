<?php
/**
 * Plugin Name:       IsaacisVargas ACF Plus
 * Plugin URI:        https://github.com/isaac-varg/acf_plus
 * Description:       Extends the Advanced Custom Fields plugin.
 * Version:           1.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Author:            Isaac Vargas
 * Author URI:        isaacvargas.me
 * License:           GNU General Public License v3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Update URI:        /
 * Text Domain:       iiv_acf_plus
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    echo 'Seems like you are lost. 🥹';
	exit; // Exit if accessed directly
}

// SETUP
define('IIV_ACF_PLUS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('IIV_ACF_PLUS_PLUGIN_URL', plugin_dir_url( __FILE__ ));

// INCLUDES

// gets all files from includes directory and subdirectory and merges them into one array
$rootFiles = glob(IIV_ACF_PLUS_PLUGIN_DIR . 'includes/*.php');
$subdirectoryFiles = glob(IIV_ACF_PLUS_PLUGIN_DIR . 'includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

// includes each file in the merged array
forEach( $allFiles as $filename ) {
    include_once($filename);
}

// HOOKS
add_action( 'wp_enqueue_scripts', 'iiv_acf_plus_styles');
add_action( 'elementor/dynamic_tags/register', 'register_site_dynamic_tag_group' );
add_action( 'elementor/dynamic_tags/register', 'register_new_dynamic_tags' );

