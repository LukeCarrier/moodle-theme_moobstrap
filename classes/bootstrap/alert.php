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
class alert implements renderable {
    /**
     * Type: success.
     *
     * @var string
     */
    const TYPE_SUCCESS = 'success';

    /**
     * Type: info.
     *
     * @var string
     */
    const TYPE_INFO = 'info';

    /**
     * Type: warning.
     *
     * @var string
     */
    const TYPE_WARNING = 'warning';

    /**
     * Type: danger.
     *
     * @var string
     */
    const TYPE_DANGER = 'danger';

    /**
     * Message contents.
     *
     * @var string
     */
    public $message;

    /**
     * Type.
     *
     * @var string
     */
    public $type;

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
     * @param string  $type
     * @param boolean $dismissable
     */
    public function __construct($message, $type=null, $dismissable=null) {
        $this->message     = $message;
        $this->type        = $type;
        $this->dismissable = $dismissable;
    }
}
