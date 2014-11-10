<?php
include('encriptacion.php');
?>
<?php
include('desemcriptar.php');
?>
<?php
if($_GET)
{
decode_get($_SERVER["REQUEST_URI"]);
$idu=$_GET['idu'];
setCookie('idu',$idu);
setCookie('acceso',1);
session_start();
$_SESSION['idu']=$idu;
$_SESSION['acceso']=1;

print"<meta http-equiv='refresh' content='0;
url=examen.tpl.php'>";
}
?>