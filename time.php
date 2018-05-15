<?php
// the function time() returns timestamp that is timezone independent
date_default_timezone_set("UTC"); 
echo "UTC:".time(); 
echo "<br>"; 

date_default_timezone_set("Europe/Helsinki"); 
echo "Europe/Helsinki:".time(); 
echo "<br>";

date_default_timezone_set("Asia/Kuala_Lumpur");
echo "Asia/Kuala_Lumpur:" .time();
echo "<br/>";
