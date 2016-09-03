<?php
// find a character and replace
// Example: W.p Kuala Lumpur => WP Kuala Lumpur
$str = "W.p Kuala Lumpur";
$dotPosition = strpos($str, '.');
$afterDotCharacter = substr($str, $dotPosition + 1, 1);
$numberOfInstances = 1;
echo str_replace_occurrences($afterDotCharacter, strtoupper($afterDotCharacter), $str, $numberOfInstances);

function str_replace_occurrences($find, $replace, $string, $count = 0)
{
    if ($count == 0) {
        return str_replace($find, $replace, $string);
    }

    $pos = 0;
    $len = strlen($find);
    while ($pos < $count && false !== ($pos = strpos($string, $find, $pos))) {
        $string = substr_replace($string, $replace, $pos, $len);
    }

    $string = str_replace('.', '', $string);

    return $string;
}
