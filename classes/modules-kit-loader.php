<?php

/**
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 */
class MKBB_Modules_Loader {

    /**
     * Initializes the class once all plugins have loaded.
     */
    static public function init() {
        add_action('plugins_loaded', __CLASS__ . '::setup_hooks');
    }

    /**
     * Setup hooks if the builder is installed and activated.
     */
    static public function setup_hooks() {
        if (!class_exists('FLBuilder')) {
            return;
        }

        // Load custom modules.
        add_action('init', __CLASS__ . '::load_modules');

        // Enqueue custom field assets.
        add_action('init', __CLASS__ . '::enqueue_field_assets');
    }

    /**
     * Loads our custom modules.
     */
    static public function load_modules() {
        require_once MKBB_DIR . 'modules/infobox/infobox.php';
        require_once MKBB_DIR . 'modules/call-to-action/call-to-action.php';
        require_once MKBB_DIR . 'modules/testimonial/testimonial.php';
        require_once MKBB_DIR . 'modules/pull-quotes/pull-quotes.php';
        require_once MKBB_DIR . 'modules/our-team/our-team.php';
        require_once MKBB_DIR . 'modules/progress-bar/progress-bar.php';
        require_once MKBB_DIR . 'modules/flipbox/flipbox.php';
        require_once MKBB_DIR . 'modules/pricing-table/pricing-table.php';
        require_once MKBB_DIR . 'modules/dual-button/dual-button.php';
    }

    /**
     * Enqueues our custom field assets only if the builder UI is active.
     */
    static public function enqueue_field_assets() {
        wp_enqueue_style('mkbb-infobox-style', MKBB_URL . 'modules/infobox/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('mkbb-cta-style', MKBB_URL . 'modules/call-to-action/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('mkbb-teatimonial-style', MKBB_URL . 'modules/testimonial/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('mkbb-pullquotes-style', MKBB_URL . 'modules/pull-quotes/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('mkbb-ourteam-style', MKBB_URL . 'modules/our-team/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('mkbb-progressbar-style', MKBB_URL . 'modules/progress-bar/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('mkbb-flipbox-style', MKBB_URL . 'modules/flipbox/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('mkbb-pricing-table-style', MKBB_URL . 'modules/pricing-table/assets/css/frontend.css', array(), 1.0);
        wp_enqueue_style('mkbb-dual-button-style', MKBB_URL . 'modules/dual-button/assets/css/frontend.css', array(), 1.0);
    }

}

MKBB_Modules_Loader::init();
