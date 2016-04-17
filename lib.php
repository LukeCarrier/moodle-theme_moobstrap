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
}
