<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

namespace theme_moobstrap\bootstrap;

use renderable;

defined('MOODLE_INTERNAL') || die;

/**
 * Bootstrap Navbar component.
 */
class navbar implements renderable {
    /**
     * Brand item.
     *
     * @var \theme_moobstrap\bootstrap\nav_item
     */
    public $brand;

    /**
     * Additional CSS classes for the nav.navbar element.
     *
     * @var string
     */
    public $classes;

    /**
     * Items.
     *
     * @var \theme_moobstrap\bootstrap\nav_item[]
     */
    public $items;

    /**
     * Root element ID.
     *
     * @var string
     */
    public $id;

    /**
     * Collapsible?
     *
     * @var boolean
     */
    public $collapsible;
}
