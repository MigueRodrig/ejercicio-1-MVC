<?php
require ('conexion.php');
    require('header.php');

		$titulo="<div class='page-header'><center>Proporsiona los siguientes <small>datos para iniciar </small></center></div>";
		$contenido="<div class='jumbotron boxlogin'>
			  <form action='valida.php' method='POST'  id='flogin'>
        <div  class='input-group'>
        <span class='input-group-addon'>Usuario:</span>
            <input name='user' type='text'  placeholder='Escribe tu usuario'  class='form-control'>
            </div>
        <br>
        <div class='input-group'><span class='input-group-addon'>Password:</span>
            <input  name='psw' type='password'  placeholder='*********' class='form-control'></div>
        <br>
        <button type='submit' class='btn btn-primary btn-lg'>Entrar</button>
    </form>";
                        
@$msg=$_GET['msg'];
if($msg!=1)
{
echo $msg;
}
echo"
    </div>
		</center>";
		
		$variable=array('titulo'=>$titulo,'contenido'=>$contenido);
		
		view ('login',$variable);

?>