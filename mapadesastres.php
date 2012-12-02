<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px }
  #map_canvas { height: 100% }
</style>
<?php
	require ("JUNAR/Conexion.php");
	echo "<script type='text/javascript'>\n";
	 
	echo "function localizar(){	\n";
		echo "navigator.geolocation.getCurrentPosition(ubicacion,error);\n";
	echo "}\n";
	 
    echo "function ubicacion(posicion){\n";
		echo "var contenedor = document.getElementById('mapa'); \n";
		echo "var latitud = posicion.coords.latitude;\n";
		echo "var longitud = posicion.coords.longitude;\n";
			
		echo "var latlng = new google.maps.LatLng(latitud, longitud);\n";
		echo "var myOptions = {\n";
			echo "zoom: 8,\n";
			echo "center: latlng,\n";
			echo "mapTypeId: google.maps.MapTypeId.ROADMAP\n";
		echo "};\n";
		echo "var map = new google.maps.Map(document.getElementById('map_canvas'),myOptions);\n";
				
		$Dataset=obtenerSismos();
		$indice=0; 
		foreach ($Dataset as $Sismo){
			if($indice==0){
				$indice=1;
			}else{
				echo "var latlng=new google.maps.LatLng(".$Sismo[7].",".$Sismo[8].");\n";
				echo "marcarLugar('".$Sismo[0]."','".$Sismo[1]."','".$Sismo[2]."','".$Sismo[3]."','".$Sismo[4]."','".$Sismo[5]."','".$Sismo[6]."',latlng,map);\n";
			}
		}
	echo "}\n";
	echo "</script>\n";
?>
	
	<script type="text/javascript">
	function marcarLugar(Fecha,Hora,Magnitud,Profundidad,Localizacion,Causa,Origen,LATLONG,mapa){
		var texto = "Fecha:"+Fecha+"\nHora:"+Hora+"\nMagnitud:"+Magnitud+"\nProfundidad:"+Profundidad+"\nCausa:"+Causa+"\nLugar:"+Origen;
		var marker = new google.maps.Marker({ //opciones
      		position: LATLONG,
      		//Decimos que la posición es la de la variable 'coordenadas'
      		map: mapa,
      		//Nombre del mapa
      		title:texto
      		//Titulo (visible cuando colocamos el ratón sobre el punto)
  		});
	}
 
    function error(error){
		if(error.code == 0)
        	 alert("Error Desconocido");
        else if(error.code == 1)
            alert("No fue posible contactarte");
        else if(error.code == 2)
            alert("No hay una ubicacion disponible");
        else if(error.code == 3)
            alert("Tiempo agotado");
        else
            alert("Error Desconocido");
	}
</script>
 
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"> </script>

</head>
<body onload="localizar()">
  <div id="map_canvas" style="width:100%; height:100%"></div>
</body>
</html>