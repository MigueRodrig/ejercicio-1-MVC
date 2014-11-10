<?php
        function view ($plantilla,$variable=array())
		
			{
				extract($variable);
				require "view/".$plantilla.".tpl.php";
				
			}
			
		function controller ($nombre)
		
		{
			if (empty($nombre))
				$nombre='login';
				$archivo="controllers/".$nombre.".php";
			
			if (file_exists ($archivo))
				require $archivo;
				
			else 
					echo "Error archivo no encontrado";
		}
			
?>

