<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

defined('MOODLE_INTERNAL') || die;

$renderers = array(
    'core',
    'core_admin',
    'theme_moobstrap_bootstrap',
);

foreach ($renderers as $renderer) {
    require_once "{$CFG->dirroot}/theme/moobstrap/renderers/{$renderer}.php";
}
