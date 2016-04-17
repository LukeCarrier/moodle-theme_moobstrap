<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

namespace theme_moobstrap;

use html_table;
use theme_moobstrap\bootstrap\has_context;
use theme_moobstrap\bootstrap\table;
use theme_moobstrap\bootstrap\table_cell;
use theme_moobstrap\bootstrap\table_row;
use theme_moobstrap\bootstrap\table_thead;

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
     * Convert a core table to a Bootstrap one.
     *
     * @param \html_table $table
     *
     * @return \theme_moobstrap\bootstrap\table
     */
    public static function html_table_to_bootstrap(html_table $oldtable) {
        $table = new table();

        $table->thead = new table_thead();
        $row = new table_row();
        foreach ($oldtable->head as $oldcell) {
            $row->cells[] = new table_cell($oldcell);
        }
        $table->thead->rows[] = $row;

        $table->tbody = array();
        foreach ($oldtable->data as $oldrow) {
            $row = new table_row();
            foreach ($oldrow as $oldcell) {
                $row->cells[] = new table_cell($oldcell);
            }
            $table->tbody[] = $row;
        }

        return $table;
    }

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
