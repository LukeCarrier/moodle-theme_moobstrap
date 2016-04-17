<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

use theme_moobstrap\bootstrap\alert;
use theme_moobstrap\bootstrap_util;

defined('MOODLE_INTERNAL') || die;

require_once "{$CFG->libdir}/outputrequirementslib.php";

/**
 * Core renderer.
 */
class theme_moobstrap_core_renderer extends core_renderer {
    public function notification($message, $type=null) {
        $alert = new alert($message, bootstrap_util::notification_alert_type($type));

        $renderer = $this->page->get_renderer('theme_moobstrap', 'bootstrap');
        return $renderer->render($alert);
    }
}
