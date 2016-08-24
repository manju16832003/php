<?php
/**
 * Testing ENT_XML1 with htmlentities
 */

$location = "/home";

$location = htmlentities($location, ENT_XML1);
echo $location;
