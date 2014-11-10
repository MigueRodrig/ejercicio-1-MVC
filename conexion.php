<?php
$conexion=mysql_connect("localhost","root","")or die ("Error de hosting".mysql_error());
$bd=mysql_select_db("examen",$conexion) or die ("ERROR al conectar la base".mysql_error());

?>
