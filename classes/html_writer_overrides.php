<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

namespace theme_moobstrap;

use html_table;

defined('MOODLE_INTERNAL') || die;

/**
 * html_writer overrides, to be loaded with Runkit.
 */
class html_writer_overrides {
    /**
     * Render an HTML table.
     *
     * @param \html_table $table
     *
     * @return string
     */
    public static function table(html_table $table) {
        global $PAGE;

        $bootstraptable = bootstrap_util::html_table_to_bootstrap($table);

        $renderer = $PAGE->get_renderer('theme_moobstrap', 'bootstrap');
        return $renderer->render($bootstraptable);
    }
}
