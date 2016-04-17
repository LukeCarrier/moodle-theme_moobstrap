<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

use theme_moobstrap\bootstrap\navbar;

defined('MOODLE_INTERNAL') || die;

/**
 * Bootstrap renderer.
 *
 * Renders Bootstrap-style templates via Mustache.
 */
class theme_moobstrap_bootstrap_renderer extends plugin_renderer_base {
    /**
     * Render a Bootstrap navbar.
     *
     * @param \theme_moobstrap\bootstrap\navbar $context
     *
     * @return string
     */
    protected function render_navbar(navbar $context) {
        return $this->render_from_template('theme_moobstrap/bootstrap_navbar', $context);
    }
}
