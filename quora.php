<?php
/*
Plugin Name: Quora
Plugin URI: https://generalchicken.net
Description: Sync your Quora account to WordPress. This plugin is NOT associated with quora.com in any way. It is a way for WordPress authors to pull their own material to their own websites.
Version: 0.1
Author: John Dee
Author URI: https://generalchicken.net
*/

namespace Quora;

require_once (plugin_dir_path(__FILE__). 'src/quora/autoloader.php');

//On this page, I only call the plugin class, and each method is directly linked to a "feature"
//Each "feature" is built with BDD "should sentances", and tested as acceptance tests.

$Plugin = new QuoraPlugin();

// It should have a settings page.
$Plugin->activateSettingsPage();