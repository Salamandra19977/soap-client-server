<?php 
	class Server
	{
		function __construct()
		{

		}

		public function getFileFromName($file) 
		{
			if($file == "employees.xml") {

				return file_get_contents('employees.xml');
			}
			else {

				return "Not found";
			}
		}
	}

	$params = array('uri' => 'rksm4.loc/server.php');
	$server = new SoapServer(NULL,$params);
	$server->setClass('Server');
	$server->handle();
?>