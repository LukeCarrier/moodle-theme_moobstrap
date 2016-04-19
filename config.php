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

    'two-column' => array(
        'file'          => 'two-column.php',
        'regions'       => array(
            'main-pre',
        ),
        'defaultregion' => 'main-pre',
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
    // The simplest layout; used for upgrades and such where plugins may not
    // function correctly.
    'base'     => $layouts['base'],
    'redirect' => $layouts['base'],

    'admin'       => $layouts['two-column'],
    'frontpage'   => $layouts['two-column'],
    'login'       => $layouts['two-column'],
    'mydashboard' => $layouts['two-column'],
);

$THEME->supportscssoptimisation = false;
$THEME->enable_dock             = false;
