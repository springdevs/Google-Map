<?php

namespace springdevs\Gmap;

/**
 * Class Installer
 * @package springdevs\Gmap
 */
class Installer
{
    /**
     * Run the installer
     *
     * @return void
     */
    public function run()
    {
        $this->requirements();
        $this->create_tables();
    }

    /**
     * some requirement actions after activate plugin
     */
    public function requirements()
    {
        // Create Option
        if (!get_option("gmap_api_key")) {
            add_option("gmap_api_key", null);
        }
    }

    /**
     * Create necessary database tables
     *
     * @return void
     */
    public function create_tables()
    {
        if (!function_exists('dbDelta')) {
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }
    }
}
