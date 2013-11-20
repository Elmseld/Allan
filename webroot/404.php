<?php 
/** 
 * This is a Allan pagecontroller.
 *
 */
// Include the essential config-file which also creates the $allan variable with its defaults.
include(__DIR__.'/config.php');
	

// Do it and store it all in variables in the Allan container.
$allan['title'] = "404";
$allan['header'] = "";
$allan['main'] = "This is a Allan 404. Document is not here.";
$allan['footer'] = "";


// Send the 404 header
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Allan.
include(ALLAN_THEME_PATH);
