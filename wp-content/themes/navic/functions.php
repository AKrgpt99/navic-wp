<?php
// Setup
define("AK_DEV_MODE", true);

// Includes
include get_theme_file_path("/inc/front/enqueue.php");
include get_theme_file_path("/inc/setup.php");
include get_theme_file_path("/inc/widgets.php");

// Hooks
add_action("wp_enqueue_scripts", "ak_enqueue");
add_action("after_setup_theme", "ak_setup_theme");
add_action("widgets_init", "ak_widgets");

// Shortcodes
