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

$Plugin = new QuoraPlugin();
$Plugin->activateSettingsPage();