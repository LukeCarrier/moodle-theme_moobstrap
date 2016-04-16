<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

defined('MOODLE_INTERNAL') || die;

$layouts = array(
    'base' => array(
        'file'    => 'base.php',
        'regions' => array(),
    ),
);

$THEME->name    = 'moobstrap';
$THEME->parents = array();
$THEME->doctype = 'html5';

$THEME->sheets             = array('moodle');
$THEME->yuicssmodules      = array();
$THEME->editor_sheets      = array();
$THEME->javascripts        = array();
$THEME->javascripts_footer = array();

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

$THEME->layouts = array(
    'admin'       => $layouts['base'],
    'base'        => $layouts['base'],
    'mydashboard' => $layouts['base'],
);

$THEME->supportscssoptimisation = false;
$THEME->enable_dock             = false;
