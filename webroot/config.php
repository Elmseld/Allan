<?php
/**
 * Config-file for Allan. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Allan paths.
 *
 */
define('ALLAN_INSTALL_PATH', __DIR__ . '/..');
define('ALLAN_THEME_PATH', ALLAN_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(ALLAN_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();


/**
 * Create the Allan variable.
 *
 */
$allan = array();


/**
 * Site wide settings.
 *
 */
$allan['lang']         = 'sv';
$allan['title_append'] = ' | Allan en webbtemplate';

$allan['header'] = <<<EOD
<img class='sitelogo' src='img/allan.png' alt='Allan Logo'/>
<span class='sitetitle'>Allan webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$allan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Emily Elmseld (emily.elmseld@gmail.com) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



/**
 * Theme related settings.
 *
 */
//$allan['stylesheet'] = 'css/style.css';
$allan['stylesheets'] = array('css/style.css');
$allan['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$allan['modernizr'] = 'js/modernizr.js';
$allan['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$allan['jquery'] = null; // To disable jQuery
$allan['javascript_include'] = array();
//$allan['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$allan['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
