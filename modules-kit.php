<?php

/*
 * Plugin Name: Modules Kit - Beaver Builder Modules
 * Plugin URI: https://wordpress.org/plugins/modules-kit/
 * Description: Modules Kit is a bunch of additional beaver builder modules for Editors, Content Writers and freelancers (to provide all possible options).
 * Version: 1.0.9
 * Author: Techeshta
 * Author URI: https://www.techeshta.com
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: modules-kit
 * Domain Path: /languages/
 */
/*
 * Exit if accessed directly
 */
if (!defined('ABSPATH')) {
    exit;
}

/*
 * Define variables
 */
define('MKBB_FILE', __FILE__);
define('MKBB_DIR', plugin_dir_path(MKBB_FILE));
define('MKBB_URL', plugins_url('/', MKBB_FILE));
define('MKBB_TEXTDOMAIN', 'modules-kit');

// Function to Load Custom Modules

/**
 * Main Plugin Modules_Kit class.
 */
class Modules_Kit {

    /**
     * Modules_Kit constructor.
     *
     * The main plugin actions registered for WordPress
     */
    public function __construct() {

        add_action('init', array($this, 'mkbb_check_dependencies'));
        $this->hooks();
        $this->mkbb_include_files();
    }

    /**
     * Initialize
     */
    public function hooks() {
        add_action('plugins_loaded', array($this, 'mkbb_load_language_files'));
    }

    /**
     * Load files
     */
    public function mkbb_include_files() {
        if (!class_exists('FLBuilder')) {
            return;
        }

        require_once( MKBB_DIR . 'classes/modules-kit-loader.php' );
    }

    /**
     * @return Loads plugin textdomain
     */
    public function mkbb_load_language_files() {
        load_plugin_textdomain('modules-kit', false, dirname(plugin_basename(__FILE__)) . '/languages');
    }

    /**
     * Check plugin dependencies
     * Check if Beaver builder plugin is installed
     */
    public function mkbb_check_dependencies() {
        if (!class_exists('FLBuilder')) {
            add_action('admin_notices', array($this, 'mkbb_widget_fail_load'));
            return;
        }
    }

    /**
     * This notice will appear if Beaver builder is not installed or activated or both
     */
    public function mkbb_widget_fail_load() {

        $plugin = 'beaver-builder-lite-version/fl-builder.php';
        $file_path = 'beaver-builder-lite-version/fl-builder.php';
        $installed_plugins = get_plugins();

        if (isset($installed_plugins[$file_path])) { // check if plugin is installed
            if (!current_user_can('activate_plugins')) {
                return;
            }
            $activation_url = wp_nonce_url('plugins.php?action=activate&amp;plugin=' . $plugin . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $plugin);

            $message = '<p><strong>' . esc_html__('Modules Kit ', 'modules-kit') . '</strong>' . esc_html__(' will not work because you have not activated the Beaver Builder.', 'modules-kit') . '</p>';
            $message .= '<p>' . sprintf('<a href="%s" class="button-primary">%s</a>', $activation_url, esc_html__('Activate Beaver Builder Now', 'modules-kit')) . '</p>';
        } else {
            if (!current_user_can('install_plugins')) {
                return;
            }

            $install_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=beaver-builder-lite-version'), 'install-plugin_beaver-builder-lite-version');

            $message = '<p><strong>' . esc_html__('Modules Kit ', 'modules-kit') . '</strong>' . esc_html__('will not work because you have not installed the Beaver Builder', 'modules-kit') . '</p>';
            $message .= '<p>' . sprintf('<a href="%s" class="button-primary">%s</a>', $install_url, esc_html__('Install Beaver Builder Now', 'modules-kit')) . '</p>';
        }

        echo '<div class="error"><p>' . wp_kses_post($message) . '</p></div>';
    }

}

/*
 * Starts our plugin class, easy!
 */
new Modules_Kit();
