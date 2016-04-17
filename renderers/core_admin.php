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

require_once "{$CFG->dirroot}/admin/renderer.php";

class theme_moobstrap_core_admin_renderer extends core_admin_renderer {
    /**
     * @override \core_admin_renderer
     */
    protected function warning($message, $type='warning') {
        $alert = new alert($message, bootstrap_util::notification_alert_type($type));

        $renderer = $this->page->get_renderer('theme_moobstrap', 'bootstrap');
        return $renderer->render($alert);
    }
}
