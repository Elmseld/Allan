<?php
/**
 * This is a Allan pagecontroller.
 *
 */
// Include the essetial config-file which also creates the $allan variable with its defaults.
include(__DIR__.'/config.php');


// Define what to include to make plugin to work
$allan['stylesheets'][] 		= 'css/slideshow.css';
$allan['javascript_include'][]	= 'js/slideshow.js';


// Do it and store it all in variables in the Allan container.
$allan['title'] = "Slideshow för att testa JavaScript i Allan";

$allan['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["me-1.jpg", "me-2.jpg", "me-3.jpg", "me-4.jpg"]'>
<img src='img/me/me-4.jpg' width='950px' height='180px' alt='Me'/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur Anax fungerar tillsammans med JavaScript.</p>
EOD;


// Finally, leave it all to the rendering phase of Allan.
include(ALLAN_THEME_PATH);
