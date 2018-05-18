<?php

$arr = ['type' => 'User'];

if(isset($arr['status']) && $arr['status'] != '') {
   echo "true";
} else {
   echo "false";
}
