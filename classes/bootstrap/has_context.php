<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

namespace theme_moobstrap\bootstrap;

defined('MOODLE_INTERNAL') || die;

/**
 * Indicates that the object has a Bootstrap context.
 */
interface has_context {
    /**
     * Context: success.
     *
     * @var string
     */
    const CONTEXT_SUCCESS = 'success';

    /**
     * Context: info.
     *
     * @var string
     */
    const CONTEXT_INFO = 'info';

    /**
     * Context: warning.
     *
     * @var string
     */
    const CONTEXT_WARNING = 'warning';

    /**
     * Context: danger.
     *
     * @var string
     */
    const CONTEXT_DANGER = 'danger';
}
