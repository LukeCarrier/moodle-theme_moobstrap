<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

namespace theme_moobstrap;

use theme_moobstrap\bootstrap\has_context;

defined('MOODLE_INTERNAL') || die;

/**
 * Bootstrap-related utility methods.
 */
class bootstrap_util {
    /**
     * Map of Moodle notification types to Bootstrap alert types.
     *
     * Descended from the $typemappings array in core_renderer::notification().
     *
     * @var string[]
     */
    protected static $NOTIFICATION_CONTEXT_MAP = array(
        // Modern types.
        'success' => has_context::CONTEXT_SUCCESS,
        'info'    => has_context::CONTEXT_INFO,
        'warning' => has_context::CONTEXT_WARNING,
        'error'   => has_context::CONTEXT_DANGER,

        // Legacy types (mapped to modern equivalents).
        'notifyproblem'   => has_context::CONTEXT_DANGER,
        'notifytiny'      => has_context::CONTEXT_DANGER,
        'notifyerror'     => has_context::CONTEXT_DANGER,
        'notifysuccess'   => has_context::CONTEXT_SUCCESS,
        'notifymessage'   => has_context::CONTEXT_INFO,
        'notifyredirect'  => has_context::CONTEXT_INFO,
        'redirectmessage' => has_context::CONTEXT_INFO,
    );

    /**
     * Get the appropriate Bootstrap alert type for a notification type.
     *
     * @param string $type
     *
     * @return string One of the has_context::CONTEXT_* values.
     */
    public static function notification_alert_type($type) {
        return static::$NOTIFICATION_CONTEXT_MAP[$type];
    }
}
