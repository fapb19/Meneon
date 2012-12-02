<?php
$con = mysql_connect("disastercontrol.webege.com","a5782778_admin","adminTAC",false,65536);
if(!$con){
	die('Could not connect'.mysql_error());
}
mysql_select_db('a5782778_QSalv',$con);
?>
