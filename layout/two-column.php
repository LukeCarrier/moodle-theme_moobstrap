<?php

/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

use theme_moobstrap\bootstrap\nav_item;
use theme_moobstrap\bootstrap\navbar;

defined('MOODLE_INTERNAL') || die;

/** @var \core_renderer $OUTPUT */
/** @var \moodle_page $PAGE */

$bootstraprenderer = $PAGE->get_renderer('theme_moobstrap', 'bootstrap');

?>

<?php echo $OUTPUT->doctype(); ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
    <head>
        <title><?php $OUTPUT->page_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php echo $OUTPUT->standard_head_html(); ?>
    </head>

    <body <?php echo $OUTPUT->body_attributes(); ?>>
        <?php echo $OUTPUT->standard_top_of_body_html(); ?>

        <?php
            $navbar = new navbar();
            $navbar->classes = 'navbar-static-top navbar-dark bg-inverse';
            $navbar->brand = new nav_item(
                    new moodle_url('/'),
                    format_string($SITE->shortname, true, array('context' => context_system::instance())));
            $navbar->id = 'm-header-nav';
            $navbar->collapsible = true;
            echo $bootstraprenderer->render($navbar);
        ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <?php echo $OUTPUT->full_header(); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <?php echo $OUTPUT->blocks('main-pre'); ?>
                </div>
                <div class="col-sm-9">
                    <?php echo $OUTPUT->course_content_header(); ?>
                    <?php echo $OUTPUT->main_content(); ?>
                    <?php echo $OUTPUT->course_content_footer(); ?>
                </div>
            </div>
        </div>

        <?php echo $OUTPUT->standard_end_of_body_html(); ?>

        <footer>
            <?php echo $OUTPUT->standard_footer_html(); ?>
        </footer>
    </body>
</html>
