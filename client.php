<?php 
	class Client
	{

		function __construct()
		{
			$params = array(
				'location' => 'http://rksm4.loc/server.php',
				'uri' => 'urn://rksm4.loc/sever.php',
				'trace' => 1
			);

			$this->instance = new SoapClient(NULL,$params);
		}

		public function getFile($file) 
		{
			return $this->instance->__soapCall('getFileFromName', $file);
		}
	}

	$client = new Client
?>