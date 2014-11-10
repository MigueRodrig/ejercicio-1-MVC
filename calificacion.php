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
require('controllers/examen.php');
require('conexion.php');

$examen = new Examen();
    $id_user= $_REQUEST['id_usuario'];
		 @$opcion1= $_REQUEST['opcion1'];
		 @$opcion2= $_REQUEST['opcion2'];
		 @$opcion3= $_REQUEST['opcion3'];
		 @$opcion4= $_REQUEST['opcion4'];
		 @$opcion5= $_REQUEST['opcion5'];
		 @$opcion6= $_REQUEST['opcion6'];
		 @$opcion7= $_REQUEST['opcion7'];
		 @$opcion8= $_REQUEST['opcion8'];
		 @$opcion9= $_REQUEST['opcion9'];
		 @$opcion10= $_REQUEST['opcion10'];
if( $opcion1==0 and $opcion2==0 and $opcion3==0 and $opcion4==0 and $opcion5==0 and $opcion6==0 and $opcion7==0 and $opcion8==0 and $opcion9==0 and $opcion10==0){
echo "<div class='jumbotron boxlogin'>";
                print("<center><h2>CONTESTAR TODAS LAS PREGUNTAS</h2></center>");
                print"<meta http-equiv='refresh' content='6;
url=examen.tpl.php'>";
                echo "</div>";
}
else{
		 $calif=(($opcion1+$opcion2+$opcion3+$opcion4+$opcion5+$opcion6+$opcion7+$opcion8+$opcion9+$opcion10)/10)*10;
		$examen->guardar($id_user,$calif);
		 echo "<div class='jumbotron boxlogin'>";
                print("<center><h1>Tu calificacion es: $calif </h1></center>");
                print"<meta http-equiv='refresh' content='6;
url=examen.tpl.php'>";
                echo "</div>";
}
?>