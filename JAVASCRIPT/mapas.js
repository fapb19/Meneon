function localizar()
      {
        navigator.geolocation.getCurrentPosition(ubicacion,error);
      }
 
     function ubicacion(posicion)
      {
        var contenedor = document.getElementById("mapa");
 
        var latitud = posicion.coords.latitude;
        var longitud = posicion.coords.longitude;
        var precision = posicion.coords.accuracy;
		
		var latlng = new google.maps.LatLng(latitud, longitud);
		var myOptions = {
		  zoom: 8,
		  center: latlng,
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		};
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
		
	//var point = new GPoint (latitud, longitud);
	//var marker = new GMarker(point);
	//map.addOverlay(marker);
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