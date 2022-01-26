<?php

$name = "I love php /@?";

$newStr = str_replace('/@?', '', $name);

//echo "$newStr";

$str = "Hello World,The World is beautifull";

$find = ['Hello','World'];
$replace = ['Hi','Earth'];

echo str_replace($find, $replace, $str);//case sensetive 


echo str_ireplace($find, $replace, $str);//case insensetive


echo str_repeat($str, 3)."<br>";

?>