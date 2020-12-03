<?php 
	include 'client.php';
	header('Content-type: text/plain');
	$file = array('name' => $_GET['name_file']);;
	echo $client->getFile($file);
?>