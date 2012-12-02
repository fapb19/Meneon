<?php
	function obtenerSismos(){
		 require_once('JunarApi.php');

		# get an auth_key at www.junar.com/developers/
		$authkey = '5872bd16379a4f2dc094ba42585ea9b7fba21644';
		$junarAPIClient = new Junar($authkey);
	
		$datastream = $junarAPIClient->datastream('SISMO-2012');
		$response = $datastream->invoke($params = array(), $output = 'json_array');
	
		// creating new data =)
		$myNewData = array();
		
		$myNewData = $response['result'];
		$Incidencias = 0;
		$DataSET= array();
		foreach ($myNewData as $row)
		{
			$DataSET[$Incidencias]=array();
			$Dato=0;
			foreach ($row as $cell){
				$DataSET[$Incidencias][$Dato]=$cell;
				$Dato=$Dato+1;
			}
			$Incidencias=$Incidencias+1;
		}
		
		return($DataSET);
	}
?>