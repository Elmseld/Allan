<?php
/**
 * This i a Allan pagecontroller.
 *
 */
// Include the essetial config-file which also creates the $allan variable with its defaults.
include(__DIR__.'/config.php');

// Do it and store it all in variables in the Allan container. 
$allan['title'] = "Hello World";

$allan['header'] = <<<EOD
<img class='sitelogo' src='img/allan.png' alt='Allan Logo'/>
<span class='sitetitle'>Allan webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$allan['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Allan ser ut och fungerar.</p>
EOD;

$allan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Emily Elmseld (emily.elmseld@gmail.com) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

//Finally, leave it all to the reading phase of Allan.
include(ALLAN_THEME_PATH);
