<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

defined('MOODLE_INTERNAL') || die;

/**
 * Perform early initialisation operations on the page.
 *
 * @param \moodle_page $page
 *
 * @return void
 */
function theme_moobstrap_page_init(moodle_page $page) {
    $page->requires->js_amd_inline('require(["theme_moobstrap/bootstrap"]);');

    if (extension_loaded('runkit')) {
        runkit_method_redefine('html_writer', 'table', function($table) {
            return \theme_moobstrap\html_writer_overrides::table($table);
        }, RUNKIT_ACC_PUBLIC | RUNKIT_ACC_STATIC);
    } else {
        debugging('runkit extension not loaded; can\'t load html_writer overrides');
    }
}
