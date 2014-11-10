
<?php
include("conexion.php"); 
require('header.php');
 

class Examen{
  private $id;
	public function mostrar(){
switch (rand(1,3)){
    case 1: 
    $idu=$_COOKIE['idu'];
$acceso=$_COOKIE['acceso'];


    
$sql="select * from usuario where id_usuario=$idu";
    $consulta=mysql_query($sql) or die ("error de consulta $sql");
    $id_usuario=mysql_result($consulta, 0, 'id_usuario');
    echo"<form action='calificacion.php' method='post' id='flogin'>";
       echo"<div class='panel panel-default'>
       <div class='list-group-item active'>1. ¿Quién inventó Facebook?</div>
       <div class='list-group-item'>
       <input type='radio' name='opcion1' value='0'> Sergey Brin </div>       
       <div class='list-group-item'><input type='radio' name='opcion1' value='1'> Mark Zuckerberg</div>
       <div class='list-group-item'><input type='radio' name='opcion1' value='0'> Larry Page</div></div>";
       echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>
       2. ¿En qué año se fundó Facebook?:</div>
       <div class='list-group-item'><input type='radio' name='opcion2' value='1'> 4 de Febrero de 2004  </div>     
       <div class='list-group-item'><input type='radio' name='opcion2' value='0'> 6 de Marzo 2008  </div>     
       <div class='list-group-item'><input type='radio' name='opcion2' value='0'> 4 de diciembre 2005</div></div>";
       echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>3. ¿Quién fundó Google?:</div>
       <div class='list-group-item'><input type='radio' name='opcion3' value='0'> Mark Zuckerberg  </div>      
       <div class='list-group-item'><input type='radio' name='opcion3' value='0'> Steven Shih Chen   </div>     
       <div class='list-group-item'><input type='radio' name='opcion3' value='1'> Sergey Brin</div></div>";
       echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       4. ¿En qué año se fundó Google?</div>
       <div class='list-group-item'><input type='radio' name='opcion4' value='0'>4 de Octubre de 1997  </div>       
       <div class='list-group-item'><input type='radio' name='opcion4' value='1'> 4 de septiembre de 1998.</div>      
       <div class='list-group-item'><input type='radio' name='opcion4' value='0'>4 de Enero de 2000 </div></div>";
       echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       5. ¿Quién fue el que invento You Tube?</div>
       <div class='list-group-item'><input type='radio' name='opcion5' value='0'> Dustin Moskovitz </div>       
       <div class='list-group-item'><input type='radio' name='opcion5' value='0'> Larry Page </div>      
       <div class='list-group-item'><input type='radio' name='opcion5' value='1'> Steven Shih Chen  </div></div>
        <div class='panel panel-default'>
       <div class='list-group-item active'>6. ¿Quién inventó Yahoo! ?</div>
       <div class='list-group-item'>
       <input type='radio' name='opcion6' value='0'> Sergey Brin </div>       
       <div class='list-group-item'><input type='radio' name='opcion6' value='1'> Jerry Yang</div>
       <div class='list-group-item'><input type='radio' name='opcion6' value='0'> Larry Page</div></div>";
       echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>
       7. ¿En qué año se fundó Yahoo!?:</div>
       <div class='list-group-item'><input type='radio' name='opcion7' value='1'> Enero de 1994  </div>     
       <div class='list-group-item'><input type='radio' name='opcion7' value='0'>  Marzo 1995  </div>     
       <div class='list-group-item'><input type='radio' name='opcion7' value='0'> Febrero de 1994</div></div>";
       echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>8. ¿Quién fue el que invento Wikipedia?</div>
       <div class='list-group-item'><input type='radio' name='opcion8' value='0'> David Filo   </div>      
       <div class='list-group-item'><input type='radio' name='opcion8' value='0'> Larry Page  </div>     
       <div class='list-group-item'><input type='radio' name='opcion8' value='1'> Jimmy Wales</div></div>";
       echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       9. ¿Quién fue el creador de Twitter?</div>
       <div class='list-group-item'><input type='radio' name='opcion9' value='0'> Mike Little   </div>       
       <div class='list-group-item'><input type='radio' name='opcion9' value='1'> Jack Dorsey </div>      
       <div class='list-group-item'><input type='radio' name='opcion9' value='0'> Matt Mullenweg </div></div>";
       echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       10. ¿Quién fue el creador de Apple?</div>
       <div class='list-group-item'><input type='radio' name='opcion10' value='0'> Jack Dorsey </div>       
       <div class='list-group-item'><input type='radio' name='opcion10' value='0'> Matt Mullenweg </div>      
       <div class='list-group-item'><input type='radio' name='opcion10' value='1'> Steve Jobs </div></div>
      <input type='hidden' id='id_usuario' name='id_usuario' value='$id_usuario'>
       <center><input type='submit' value='guardar'></center>";
       echo"</form>";
        break; 
    case 2: 
        $idu=$_COOKIE['idu'];
$acceso=$_COOKIE['acceso'];

$sql="select * from usuario where id_usuario=$idu";
    $consulta=mysql_query($sql) or die ("error de consulta $sql");
    $id_usuario=mysql_result($consulta, 0, 'id_usuario');
    echo"<form action='calificacion.php' method='post'>";
         echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       10. ¿Quién fue el creador de Apple?</div>
       <div class='list-group-item'><input type='radio' name='opcion10' value='0'> Jack Dorsey </div>       
       <div class='list-group-item'><input type='radio' name='opcion10' value='0'> Matt Mullenweg </div>      
       <div class='list-group-item'><input type='radio' name='opcion10' value='1'> Steve Jobs </div></div>";
          echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       9. ¿Quién fue el creador de Twitter?</div>
       <div class='list-group-item'><input type='radio' name='opcion9' value='0'> Mike Little   </div>       
       <div class='list-group-item'><input type='radio' name='opcion9' value='1'> Jack Dorsey </div>      
       <div class='list-group-item'><input type='radio' name='opcion9' value='0'> Matt Mullenweg </div></div>";
       echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>8. ¿Quién fue el que invento Wikipedia?</div>
       <div class='list-group-item'><input type='radio' name='opcion8' value='0'> David Filo   </div>      
       <div class='list-group-item'><input type='radio' name='opcion8' value='0'> Larry Page  </div>     
       <div class='list-group-item'><input type='radio' name='opcion8' value='1'> Jimmy Wales</div></div>";
          echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>
       7. ¿En qué año se fundó Yahoo!?:</div>
       <div class='list-group-item'><input type='radio' name='opcion7' value='1'> Enero de 1994  </div>     
       <div class='list-group-item'><input type='radio' name='opcion7' value='0'>  Marzo 1995  </div>     
       <div class='list-group-item'><input type='radio' name='opcion7' value='0'> Febrero de 1994</div></div>";
           echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       5. ¿Quién fue el que invento You Tube?</div>
       <div class='list-group-item'><input type='radio' name='opcion5' value='0'> Dustin Moskovitz </div>       
       <div class='list-group-item'><input type='radio' name='opcion5' value='0'> Larry Page </div>      
       <div class='list-group-item'><input type='radio' name='opcion5' value='1'> Steven Shih Chen  </div></div>
        
        <div class='panel panel-default'>
       <div class='list-group-item active'>6. ¿Quién inventó Yahoo! ?</div>
       <div class='list-group-item'>
       <input type='radio' name='opcion6' value='0'> Sergey Brin </div>       
       <div class='list-group-item'><input type='radio' name='opcion6' value='1'> Jerry Yang</div>
       <div class='list-group-item'><input type='radio' name='opcion6' value='0'> Larry Page</div></div>";
         echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       4. ¿En qué año se fundó Google?</div>
       <div class='list-group-item'><input type='radio' name='opcion4' value='0'>4 de Octubre de 1997  </div>       
       <div class='list-group-item'><input type='radio' name='opcion4' value='1'> 4 de septiembre de 1998.</div>      
       <div class='list-group-item'><input type='radio' name='opcion4' value='0'>4 de Enero de 2000 </div></div>";
       echo"<div class='panel panel-default'>
       <div class='list-group-item active'>1. ¿Quién inventó Facebook?</div>
       <div class='list-group-item'>
       <input type='radio' name='opcion1' value='0'> Sergey Brin </div>       
       <div class='list-group-item'><input type='radio' name='opcion1' value='1'> Mark Zuckerberg</div>
       <div class='list-group-item'><input type='radio' name='opcion1' value='0'> Larry Page</div></div>";
        echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>3. ¿Quién fundó Google?:</div>
       <div class='list-group-item'><input type='radio' name='opcion3' value='0'> Mark Zuckerberg  </div>      
       <div class='list-group-item'><input type='radio' name='opcion3' value='0'> Steven Shih Chen   </div>     
       <div class='list-group-item'><input type='radio' name='opcion3' value='1'> Sergey Brin</div></div>";
       echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>
       2. ¿En qué año se fundó Facebook?:</div>
       <div class='list-group-item'><input type='radio' name='opcion2' value='1'> 4 de Febrero de 2004  </div>     
       <div class='list-group-item'><input type='radio' name='opcion2' value='0'> 6 de Marzo 2008  </div>     
       <div class='list-group-item'><input type='radio' name='opcion2' value='0'> 4 de diciembre 2005</div></div>
      <input type='hidden' id='id_usuario' name='id_usuario' value='$id_usuario'>
       <center><input type='submit' value='guardar'></center>";
       echo"</form>";
        break; 
    case 3: 
        $idu=$_COOKIE['idu'];
$acceso=$_COOKIE['acceso'];

$sql="select * from usuario where id_usuario=$idu";
    $consulta=mysql_query($sql) or die ("error de consulta $sql");
    $id_usuario=mysql_result($consulta, 0, 'id_usuario');
     echo"<form action='calificacion.php' method='post'>";
        
          echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       9. ¿Quién fue el creador de Twitter?</div>
       <div class='list-group-item'><input type='radio' name='opcion9' value='0'> Mike Little   </div>       
       <div class='list-group-item'><input type='radio' name='opcion9' value='1'> Jack Dorsey </div>      
       <div class='list-group-item'><input type='radio' name='opcion9' value='0'> Matt Mullenweg </div></div>";
        echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       10. ¿Quién fue el creador de Apple?</div>
       <div class='list-group-item'><input type='radio' name='opcion10' value='0'> Jack Dorsey </div>       
       <div class='list-group-item'><input type='radio' name='opcion10' value='0'> Matt Mullenweg </div>      
       <div class='list-group-item'><input type='radio' name='opcion10' value='1'> Steve Jobs </div></div>";
       echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>8. ¿Quién fue el que invento Wikipedia?</div>
       <div class='list-group-item'><input type='radio' name='opcion8' value='0'> David Filo   </div>      
       <div class='list-group-item'><input type='radio' name='opcion8' value='0'> Larry Page  </div>     
       <div class='list-group-item'><input type='radio' name='opcion8' value='1'> Jimmy Wales</div></div>";
        echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>
       2. ¿En qué año se fundó Facebook?:</div>
       <div class='list-group-item'><input type='radio' name='opcion2' value='1'> 4 de Febrero de 2004  </div>     
       <div class='list-group-item'><input type='radio' name='opcion2' value='0'> 6 de Marzo 2008  </div>     
       <div class='list-group-item'><input type='radio' name='opcion2' value='0'> 4 de diciembre 2005</div></div>";
           echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       5. ¿Quién fue el que invento You Tube?</div>
       <div class='list-group-item'><input type='radio' name='opcion5' value='0'> Dustin Moskovitz </div>       
       <div class='list-group-item'><input type='radio' name='opcion5' value='0'> Larry Page </div>      
       <div class='list-group-item'><input type='radio' name='opcion5' value='1'> Steven Shih Chen  </div></div>
        
        <div class='panel panel-default'>
       <div class='list-group-item active'>6. ¿Quién inventó Yahoo! ?</div>
       <div class='list-group-item'>
       <input type='radio' name='opcion6' value='0'> Sergey Brin </div>       
       <div class='list-group-item'><input type='radio' name='opcion6' value='1'> Jerry Yang</div>
       <div class='list-group-item'><input type='radio' name='opcion6' value='0'> Larry Page</div></div>";
          echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>
       7. ¿En qué año se fundó Yahoo!?:</div>
       <div class='list-group-item'><input type='radio' name='opcion7' value='1'> Enero de 1994  </div>     
       <div class='list-group-item'><input type='radio' name='opcion7' value='0'>  Marzo 1995  </div>     
       <div class='list-group-item'><input type='radio' name='opcion7' value='0'> Febrero de 1994</div></div>";
         echo"
<div class='panel panel-default'>
       <div class='list-group-item active'>
       4. ¿En qué año se fundó Google?</div>
       <div class='list-group-item'><input type='radio' name='opcion4' value='0'>4 de Octubre de 1997  </div>       
       <div class='list-group-item'><input type='radio' name='opcion4' value='1'> 4 de septiembre de 1998.</div>      
       <div class='list-group-item'><input type='radio' name='opcion4' value='0'>4 de Enero de 2000 </div></div>";
        echo"
       <div class='panel panel-default'>
       <div class='list-group-item active'>3. ¿Quién fundó Google?:</div>
       <div class='list-group-item'><input type='radio' name='opcion3' value='0'> Mark Zuckerberg  </div>      
       <div class='list-group-item'><input type='radio' name='opcion3' value='0'> Steven Shih Chen   </div>     
       <div class='list-group-item'><input type='radio' name='opcion3' value='1'> Sergey Brin</div></div>";
       echo"<div class='panel panel-default'>
       <div class='list-group-item active'>1. ¿Quién inventó Facebook?</div>
       <div class='list-group-item'>
       <input type='radio' name='opcion1' value='0'> Sergey Brin </div>       
       <div class='list-group-item'><input type='radio' name='opcion1' value='1'> Mark Zuckerberg</div>
       <div class='list-group-item'><input type='radio' name='opcion1' value='0'> Larry Page</div></div>";
       
      echo"<input type='hidden' id='id_usuario' name='id_usuario' value='$id_usuario'>
       <center><input type='submit' value='guardar'></center>";
       echo"</form>";
        break; 
    }
}
   public function guardar($id_user,$calif){
        $sql="select calificacion from usuario where id_usuario=$id_user";
    $consulta=mysql_query($sql) or die ("error de consulta $sql");
    $calificacion=mysql_result($consulta, 0, 'calificacion');
        if ($calif > $calificacion){
            $insert01 = " update usuario SET calificacion='$calif' WHERE id_usuario= $id_user";
            $execute01 = mysql_query($insert01) or die("Error  $insert01");
            

        } 
    }
}

?>