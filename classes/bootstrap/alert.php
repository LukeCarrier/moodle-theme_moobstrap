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
 * Bootstrap Alert component.
 */
class alert implements has_context, renderable {
    /**
     * Message contents.
     *
     * @var string
     */
    public $message;

    /**
     * Context.
     *
     * @var string One of the has_context::CONTEXT_* values.
     */
    public $context;

    /**
     * Dismissable?
     *
     * @var boolean
     */
     public $dismissable;

    /**
     * Initialiser.
     *
     * @param string  $message
     * @param string  $context
     * @param boolean $dismissable
     */
    public function __construct($message, $context=null, $dismissable=null) {
        $this->message     = $message;
        $this->type        = $context;
        $this->dismissable = $dismissable;
    }
}
