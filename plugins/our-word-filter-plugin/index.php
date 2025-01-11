<?php

/**
 * 
 * Plugin name: Our world filter plugin
 * Description: QuanLV plugin
 * Version: 1.0
 * Author: QuanLV
 * Author URL: https://google.com
 */

if (!defined('ABSPATH'))
    exit;

class OurWorldFilterPlugin
{
    function __construct()
    {
        add_action('admin_menu', array($this, 'ourMenu'));
    }

    function ourMenu()
    {
        add_menu_page('Words To Filter', 'Word Filter', 'manage_options', 'ourwordfilter', array($this, 'wordFilterPage'), 'dashicons-smiley','data:image/svg+xml;base64', 100);
        add_submenu_page('ourwordfilter', 'Words To Filter', 'Words List', 'manage_options', 'ourwordfilter', array($this, 'wordFilterPage'));
        add_submenu_page('ourwordfilter', 'Word Filter Options', 'Options', 'manage_options', 'word-filter-options', array($this, 'optionsSubPage'));
    }

    function worldFilterPage() { ?>
        Hello world!
    <?php }
    function optionSubPage() { ?>
        Hello world from optionSubPage!
    <?php }

}
;

$ourWorldFilterPlugin = new OurWorldFilterPlugin();