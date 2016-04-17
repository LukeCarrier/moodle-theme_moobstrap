<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

namespace theme_moobstrap\bootstrap;

use renderable;

defined('MOODLE_INTERNAL') || die;

/**
 * Bootstrap table head.
 */
class table_thead implements renderable {
    /**
     * Style: inverse.
     *
     * @var string
     */
    const STYLE_INVERSE = 'inverse';

    /**
     * Style: default.
     *
     * @var string
     */
    const STYLE_DEFAULT = 'default';

    /**
     * Style.
     *
     * @var string One of the STYLE_* values.
     */
    public $style;

    /**
     * Head rows.
     *
     * @var \theme_moobstrap\bootstrap\table_row[]
     */
    public $rows;

    /**
     * Initialiser.
     *
     * @param \theme_moobstrap\bootstrap\table_row[] $rows
     */
    public function __construct($rows=null) {
        $this->rows = $rows;
    }
}
