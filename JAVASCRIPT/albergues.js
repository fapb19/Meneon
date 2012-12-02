// JavaScript Document

function getHtmlAlbergue(Nombre, CapacidadMaxima, CantidadActual, Contacto, Estado, Longitud, Latitud){
	var htmlTXT="";
	htmlTXT+="<div class='Nombre' id='Nombre'>" + Nombre;
	htmlTXT+="<div class='Informacion' id='capacidad'>Capacidad Maxima: " + CapacidadMaxima + " Cantidad: " + CantidadActual;				
	htmlTXT+="<div class='Informacion' id='contacto'>Contacto: " + Contacto;
	htmlTXT+="<div class='Informacion' id='estado'>Estado: " + Estado;				
	htmlTXT+="<div class='Informacion' id='longitud'>Longitud: " + Longitud + " Latitud: " + Latitud;					
	htmlTXT+="</div>";
	htmlTXT+="</div>";
	htmlTXT+="</div>";
	htmlTXT+="</div>";	
	htmlTXT+="</div>";
	return htmlTXT;
}