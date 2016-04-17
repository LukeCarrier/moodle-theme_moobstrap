<?php

namespace theme_moobstrap;

use theme_moobstrap\bootstrap\alert;

class bootstrap_util {
    /**
     * Map of Moodle notification types to Bootstrap alert types.
     *
     * Descended from the $typemappings array in core_renderer::notification().
     *
     * @var string[]
     */
    protected static $NOTIFICATION_ALERT_MAP = array(
        // Modern types.
        'success' => alert::TYPE_SUCCESS,
        'info'    => alert::TYPE_INFO,
        'warning' => alert::TYPE_WARNING,
        'error'   => alert::TYPE_DANGER,

        // Legacy types (mapped to modern equivalents).
        'notifyproblem'   => alert::TYPE_DANGER,
        'notifytiny'      => alert::TYPE_DANGER,
        'notifyerror'     => alert::TYPE_DANGER,
        'notifysuccess'   => alert::TYPE_SUCCESS,
        'notifymessage'   => alert::TYPE_INFO,
        'notifyredirect'  => alert::TYPE_INFO,
        'redirectmessage' => alert::TYPE_INFO,
    );

    /**
     * Get the appropriate Bootstrap alert type for a notification type.
     *
     * @param string $type
     *
     * @return string One of the alert::TYPE_* values.
     */
    public static function notification_alert_type($type) {
        return static::$NOTIFICATION_ALERT_MAP[$type];
    }
}
