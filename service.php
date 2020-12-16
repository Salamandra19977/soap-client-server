<?php 
	include 'client.php';
	header('Content-type: text/plain');
	$name = $_GET['name_file'];
	$count = $_GET['count'];
	$firstname = $_GET['option1'];
	$lastname = $_GET['option2'];
    $title = $_GET['option3'];
    $division = $_GET['option4'];
    $building = $_GET['option5'];
    $room = $_GET['option6'];

	$file = array(
		'file' => array(		
			'name' => $name,
			'count' => $count,
			'firstname' => $firstname,
			'lastname' => $lastname,
			'title' => $title,
			'division' => $division,
			'building' => $building,
			'room' => $room
		)
	);
	echo $client->getFile($file);
?>