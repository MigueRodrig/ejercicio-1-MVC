<?php
include('encriptacion.php');
?>
<?php
$user=$_POST['user'];
$psw=$_POST['psw'];
if($user=="" or $psw=="")
{
$msg="<font color=red><center><h2>Los campos deven de ir llenos</h2></center></font>";
print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";

exit;

}

include('conexion.php');


$consulta=mysql_query("select * from usuario where usuario = \"" . mysql_real_escape_string($user) . "\"and password='$psw'"  ); 
$filas=mysql_num_rows($consulta);
if($filas==0)
{
$msg="<font color=red><center><h2>Usuario o password no valido</h2></center></font>";
print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
exit;
}
else
{
$idu=mysql_result($consulta,0,'id_usuario');
$activo=mysql_result($consulta,0,'estatus');
if($activo=='NO')
{
$msg="<font color=red><center><h3>El usuario esta desactivado consulte a su administrador</h3></center></font>";
print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
exit;

}

else
{
$id=encode_this("idu=$idu");
print"<meta http-equiv='refresh' content='0;
url=acceso.php?".$id."'>";
exit;
}


}



?>