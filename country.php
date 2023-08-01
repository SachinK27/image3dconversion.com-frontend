<?php

$data = json_decode(file_get_contents('https://ip-api.io/api/json?api_key=YOUR_API_KEY'));
var_dump($data);
?>