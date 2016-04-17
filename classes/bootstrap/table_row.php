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
 * Bootstrap table row.
 */
class table_row implements has_context, renderable {
    /**
     * Context.
     *
     * @var string One of the has_context::CONTEXT_* values.
     */
    public $context;

    /**
     * Row cells.
     *
     * @var \theme_moobstrap\bootstrap\table_cell[]
     */
    public $cells;
}
