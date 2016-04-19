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
    /**
     * @override \core_renderer
     */
    public function block(block_contents $contents, $region) {
        $contents->add_class('card');

        return parent::block($contents, $region);
    }

    /**
     * @override \core_renderer
     */
    protected function block_header(block_contents $bc) {
        $title = '';

        if ($bc->title) {
            $attributes = array(
                'class' => 'card-title',
            );
            if ($bc->blockinstanceid) {
                $attributes['id'] = "instance-{$bc->blockinstanceid}-header";
            }
            $title = html_writer::tag('h2', $bc->title, $attributes);
        }

        $blockid = array_key_exists('id', $bc->attributes)
                ? $bc->attributes['id'] : null;
        $controls = $this->block_controls($bc->controls, $blockid);

        if (!$title && !$controls) {
            return '';
        }

        return html_writer::start_tag('div', array('class' => 'card-block'))
             .     $title
             .     $controls
             . html_writer::end_tag('div');
    }

    /**
     * @override \core_renderer
     */
    public function notification($message, $type=null) {
        $alert = new alert($message, bootstrap_util::notification_alert_type($type));

        $renderer = $this->page->get_renderer('theme_moobstrap', 'bootstrap');
        return $renderer->render($alert);
    }
}
