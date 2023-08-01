<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$locationArray = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip));
echo '<pre>';
print_r($locationArray['geoplugin_countryName']);

?>