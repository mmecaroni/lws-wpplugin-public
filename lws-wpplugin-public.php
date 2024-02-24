<?php
/*
Plugin Name: LWS WpPlugin Public
Plugin URI: http://www.liquidstudiodev.com/wp/lws-wpplugin-public
Description: Just a testing public plugin to see how to update it from github
Version: 0.0.1
Author: Mario Mecaroni
Author URI: http://www.liquidstudiogroup.com/mario-mecaroni
License: MIT
Text Domain: lws-wpplugin-public
GitHub Plugin URI: https://github.com/mmecaroni/lws-wpplugin-public
GitHub Branch: master
*/

if (!defined('ABSPATH')) { exit; }
/****** Display Version */
echo "v0.0.1";
/****** Constant for Plugin Path */
define('LWS_WPPLUGIN_PUBLIC_FILE_PATH', plugin_dir_path(__FILE__));
/****** Main Plugin File Constant */
define('LWS_WPPLUGIN_PUBLIC_MAIN_FILE', __FILE__);
/****** EXAMPLE REQUIRE */
// require_once trailingslashit(LWS_WPPLUGIN_PUBLIC_FILE_PATH) . "packages/dashboard/page-dashboard.php";

/**
 * Plugin Updater Script
 * Must be in this main file.
 */
// require 'path/to/plugin-update-checker/plugin-update-checker.php';
require_once trailingslashit(LWS_WPPLUGIN_PUBLIC_FILE_PATH) . "plugin-update-checker/plugin-update-checker.php";
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mmecaroni/lws-wpplugin-public',
	__FILE__, // Full path to the main plugin file or functions.php.
	'lws-wpplugin-public'
);
// Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');
//Optional: If you're using a private repository, specify the access token like this:
// $myUpdateChecker->setAuthentication('your-token-here');