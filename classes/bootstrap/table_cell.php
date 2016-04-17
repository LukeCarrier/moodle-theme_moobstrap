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
 * Bootstrap table cell.
 */
class table_cell implements has_context, renderable {
    /**
     * Context.
     *
     * @var string One of the has_context::CONTEXT_* values.
     */
    public $context;

    /**
     * Cell value.
     *
     * @var string
     */
    public $value;

    /**
     * Initialiser.
     *
     * @param string $value
     */
    public function __construct($value=null) {
        $this->value = $value;
    }
}
