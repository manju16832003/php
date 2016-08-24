<?php
/**
 * Created by PhpStorm.
 * User: majunanthreddy
 * Date: 24/08/2016
 * Time: 9:21 AM
 */
// http://stackoverflow.com/questions/19017694/one-line-php-random-string-generator
$length = 10;
$randomString = substr(str_shuffle(md5(time())),0,$length);
echo $randomString;
