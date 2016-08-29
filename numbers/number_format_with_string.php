<?php
/**
 * Created by PhpStorm.
 * User: majunanthreddy
 * Date: 25/08/2016
 * Time: 2:39 PM
 */

// With Number as String
$number = "234234234242";
echo number_format($number);
echo PHP_EOL;
// If empty string, Throws an error
// Error = number_format() expects parameter 1 to be double
$number = '';
echo number_format($number);

