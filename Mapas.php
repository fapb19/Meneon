<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Alerta Desastres</title>
    <link href="CSS/Estilos.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Mapas.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
		function setearFrame(){
			var _CBTipo=document.getElementById("Tipo");
			var _indiceTipo=_CBTipo.selectedIndex;
			var _Tipo=document.getElementById("Tipo").options[_indiceTipo];
			
			var _CBTiempo=document.getElementById("Tiempo");
			var _indiceTiempo=_CBTiempo.selectedIndex;
			var _Tiempo=document.getElementById("Tiempo").options[_indiceTiempo];
			
			var _CBDistancia=document.getElementById("Distancia");
			var _indiceDistancia=_CBDistancia.selectedIndex;
			var _Distancia=document.getElementById("Distancia").options[_indiceDistancia];
			var _DivMapa=document.getElementById("Mapa");
			if(_Tipo.value=="Sismos"){
				_DivMapa.innerHTML="<iframe src='http://disastercontrol.webege.com/mapadesastres.php?Distancia="+_Distancia.value+"&Tiempo="+_Tiempo.value+"' width='100%' height='65%' frameborder='0'></iframe>";
			}
			alert(_Tipo.value+"  "+_Tiempo.value+"   "+_Distancia.value);
		}
	</script>
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div id="navbar">
    	<a href="default.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="Mapas.php">MAPAS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="Clima.php">CLIMA</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="">ALBERGUES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="">REDES SOCIALES</a>
    </div>
  </div>
  <div id="Container">
  	<form action="Mapas.php" method="POST">
  	<div id=Submenu>
    	Tipo de notificaciones
    <select name="Tipo" id="Tipo">
          <option value="Sismos">Sismos</option>
          <option value="Salvaditas">Salvaditas</option>
          <option value="Todos">Todos</option>
        </select>
        Tiempo
    <select name="Tiempo" id="Tiempo">
          <option value="Today">Ultimo Día</option>
          <option value="Historial">Historial</option>
        </select>
        Distancia 
    <select name="Distancia" id="Distancia" >
          <option value="10">10 km</option>
          <option value="20">20 km</option>
          <option value="40">40 km</option>
          <option value="100">100 km</option>
          <option value="200">mas de 100 km</option>
        </select>
      <input type="button" name="Filtrar" id="Filtrar" value="Filtrar" onClick="setearFrame()">
  	</form>
    </div>
	<div id=Mapa>
	    <iframe src="http://disastercontrol.webege.com/mapadesastres.php?Distancia='10'&Tiempo='Today'" width="100%" height="65%" frameborder="0"></iframe>
  </div>
    <div id="footer"><h5 align="center">© 2012 TAC</h5></div>
  </div>
</div>
</body>
</html>