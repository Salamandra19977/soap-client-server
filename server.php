<?php 
	class Server
	{
		function __construct()
		{

		}

		public function getFileFromName($file) 
		{
			$employees = new SimpleXMLElement('employees.xml',  null, true);
			$employees->employee[0]->firstname;

			if($file['name'] == "employees.xml") {
				$output = null;
				
				for($i = 0; $i < $file['count']; $i++) {
					$output .= "*************************"."\r\n";
					$output .= "Працівник id".$i."\r\n";
					if($file['firstname']) $output .= "Ім'я: ".$employees->employee[$i]->firstname."\r\n";
					if($file['lastname']) $output .= "Прізвище: ".$employees->employee[$i]->lastname."\r\n";
					if($file['title']) $output .= "Підрозділ: ".$employees->employee[$i]->title."\r\n";
					if($file['division']) $output .= "Посада: ".$employees->employee[$i]->division."\r\n";
					if($file['building']) $output .= "Корпус: ".$employees->employee[$i]->building."\r\n";
					if($file['room']) $output .= "Номер робочої кімнати: ".$employees->employee[$i]->room."\r\n";
					$output .= "*************************"."\r\n";
				}

				return $output;
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