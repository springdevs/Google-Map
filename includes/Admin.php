<?php

namespace springdevs\Gmap;

use springdevs\Gmap\Admin\Locations;
use springdevs\Gmap\Admin\Maps;
use springdevs\Gmap\Admin\Settings;

/**
 * The admin class
 */
class Admin
{

    /**
     * Initialize the class
     */
    public function __construct()
    {
        $this->dispatch_actions();
        add_action('admin_menu', [$this, 'menu']);
        new Locations;
        new Maps;
        new Settings;
    }

    /**
     * Admin menu
     *
     **/
    public function menu()
    {
        add_menu_page("Gmaps", "Gmaps", "manage_options", "gmaps", function () {
            return "Hello world";
        }, '', 40);
    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     */
    public function dispatch_actions()
    {
    }
}
