<?php
$idu=$_COOKIE['idu'];
$acceso=$_COOKIE['acceso'];
if ($idu=="" or $acceso="")
{
print"<meta http-equiv='refresh' content='0;
url=index.php?msg=1'>";
}
session_start();
$idu2=$_SESSION['idu'];
$acceso2=$_SESSION['acceso'];
if ($idu2=="" or $acceso2="")
{
print"<meta http-equiv='refresh' content='0;
url=index.php?msg=1'>";
}
?>
<?php
include("conexion.php"); 
require ('controllers/examen.php');
require ('header.php');

    $sql="select * from usuario where id_usuario='$idu'";
    $consulta=mysql_query($sql) or die ("error de consulta $sql");
    $idu=mysql_result($consulta, 0, 'id_usuario');
    $nombre=mysql_result($consulta, 0, 'usuario');
	$nombre=ucwords("$nombre");
    $calificacion_actual=mysql_result($consulta, 0, 'calificacion');
    
echo"
<nav class='navbar navbar-default' role='navigation'>
<div class='container-fluid'><p class='navbar-text navbar-height'><b>Bienvenido $nombre</b></p>
<p class='navbar-text navbar-right'>
CALIFICACION ACTUAL: <b>$calificacion_actual</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='cerrarcesion.php'> <button type='button' class='btn btn-default btn-lg'>
  <span class='glyphicon glyphicon-remove'></span>Cerrar sesión </button></a></p>
</div>
</nav> 
<CENTER><FONT face='monotype corsiva' COLOR='silver' SIZE=15>Examen de opción múltiple</FONT></CENTER>";
echo"<div class='contenedor'>";
$a = new Examen();
$a->mostrar();
echo"</div>";

		
		

?>

  
