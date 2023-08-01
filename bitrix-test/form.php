<?php

require_once('in_hook/crest.php');

/**
 * Write data to log file.
 *
 * @param mixed $data
 * @param string $title
 *
 * @return bool
 */
function writeToLog($data, $title = '') {
	$log = "\n------------------------\n";
	$log .= date("Y.m.d G:i:s") . "\n";
	$log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
	$log .= print_r($data, 1);
	$log .= "\n------------------------\n";
	file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
	return true;
}


if(isset($_POST['submit']))
{
	
    $defaults = array('one' => '','four' => '', 'two' => '');

	if (array_key_exists('saved', $_REQUEST)) {
		die('1');
		$defaults = $_REQUEST;
		writeToLog($_REQUEST, 'webform');

		$queryUrl = 'https://i3dgroup.bitrix24.com/rest/1/0e7d1xjm7u0zivbr/crm.lead.add.json';
		$queryData = http_build_query(array(
		'fields' => array(
		"TITLE" => "contact",
		"NAME" => $_REQUEST['one'],
		"PHONE" => $_REQUEST['four'],
		"STATUS_ID" => "NEW",
		"OPENED" => "Y",
		"ASSIGNED_BY_ID" => 1,
		"PHONE" => array(array("VALUE" => $_REQUEST['four'], "VALUE_TYPE" => "WORK" )),
		"EMAIL" => array(array("VALUE" => $_REQUEST['two'], "VALUE_TYPE" => "WORK" )),
		),
		'params' => array("REGISTER_SONET_EVENT" => "Y")
		));

	 $curl = curl_init();
	 curl_setopt_array($curl, array(
	 CURLOPT_SSL_VERIFYPEER => 0,
	 CURLOPT_POST => 1,
	 CURLOPT_HEADER => 0,
	 CURLOPT_RETURNTRANSFER => 1,
	 CURLOPT_URL => $queryUrl,
	 CURLOPT_POSTFIELDS => $queryData,
	 ));

	 $result = curl_exec($curl);
	 curl_close($curl);

	 $result = json_decode($result, 1);
	 writeToLog($result, 'webform result');

	 if (array_key_exists('error', $result)) echo "Error saving Lead: ".$result['error_description']."
	";
	}
}

?>