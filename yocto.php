<?php
$strings = file_get_contents('./content.json') or die ("Unable to open text-file");
$strings = json_decode($strings, true);

/**
 *  Default function to use content in your pages
 */
function y($key) {
    global $strings;
    return nl2br($strings[$key]);
}

/**
 *  Raw content
 */
function raw($key) {
    global $strings;
    return $strings[$key];
}
?>