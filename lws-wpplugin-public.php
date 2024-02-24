<?php
/*
Plugin Name: LWS WpPlugin Public
Plugin URI: http://www.liquidstudiodev.com/wp/lws-wpplugin-public
Description: Just a testing public plugin to see how to update it from github
Version: 0.0.4
Author: Mario Mecaroni
Author URI: http://www.liquidstudiogroup.com/mario-mecaroni
License: MIT
Text Domain: lws-wpplugin-public
GitHub Plugin URI: https://github.com/mmecaroni/lws-wpplugin-public
GitHub Branch: master
*/

/****** Get lost! */
if (!defined('ABSPATH')) { exit; }
/****** Display Version */
add_action("wp_footer", function() {
	echo "LWS WPPlugin Public Version: 0.0.4";
});
/****** Constant for Plugin Path */
define('LWS_WPPLUGIN_PUBLIC_FILE_PATH', plugin_dir_path(__FILE__));
/****** Main Plugin File Constant */
define('LWS_WPPLUGIN_PUBLIC_MAIN_FILE', __FILE__);
/****** EXAMPLE REQUIRE */
// require_once trailingslashit(LWS_WPPLUGIN_PUBLIC_FILE_PATH) . "packages/dashboard/page-dashboard.php";