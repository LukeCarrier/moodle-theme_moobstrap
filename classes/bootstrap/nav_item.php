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
 * Navigation item.
 */
class nav_item implements renderable {
    /**
     * Item name.
     *
     * @var string
     */
    public $name;

    /**
     * Item URL.
     *
     * @var string
     */
    public $url;

    /**
     * Active?
     *
     * @var boolean
     */
    public $active;

    /**
     * Initialiser.
     *.
     * @param string $url
     * @param string $name
     */
    public function __construct($url, $name) {
        $this->url  = $url;
        $this->name = $name;
    }
}
