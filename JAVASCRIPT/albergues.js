// JavaScript Document

function getHtmlAlbergue(pNumero,pTitulo,pImagen){
	var htmlTXT="";
	htmlTXT+="<div class='ImagenActividad' id='Imagen"+pNumero+"'>";
	htmlTXT+="<img class='Imagenes' src='"+pImagen+"' alt='perdida'>";				
	htmlTXT+="</div>";
	htmlTXT+="<div class='TitulosActividades' id='Titulo"+pNumero+"'>";
	htmlTXT+="<center><a href='CharlaIndividual.php?Titulo="+pTitulo+"' class='Subrayar'><h4>"+pTitulo+"</h4></a></center>";
	htmlTXT+="</div>";
	return htmlTXT;
}