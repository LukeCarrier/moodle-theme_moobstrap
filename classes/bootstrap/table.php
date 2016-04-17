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
 * Bootstrap Table component.
 */
class table implements renderable {
    /**
     * Inversed?
     *
     * @var boolean
     */
    public $inverse;

    /**
     * Striped?
     *
     * @var boolean
     */
    public $striped;

    /**
     * Bordered?
     *
     * @var boolean
     */
    public $bordered;

    /**
     * Hoverable rows?
     *
     * @var boolean
     */
    public $hoverable;

    /**
     * Small table?
     *
     * @var boolean
     */
    public $small;

    /**
     * Responsive?
     *
     * @var boolean
     */
    public $responsive;

    /**
     * Reflow?
     *
     * @var boolean
     */
    public $reflow;

    /**
     * Table head.
     *
     * @var \theme_moobstrap\bootstrap\table_thead[]
     */
    public $thead;

    /**
     * Table body rows.
     *
     * @var \theme_moobstrap\bootstrap\table_row[]
     */
    public $tbody;

    /**
     * Initialiser.
     *
     * @param \theme_moobstrap\bootstrap\table_thead $thead
     * @param \theme_moobstrap\bootstrap\table_row[] $tbody
     */
    public function __construct($thead=null, $tbody=null) {
        $this->thead = $thead;
        $this->tbody = $tbody;
    }
}
