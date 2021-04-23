<?php
    function cargarPagina($pagina){
		$modulo = $pagina . ".php"; 
		
		//file_exists también chequea si un directorio existe
		if(file_exists($modulo)) {
		   require_once($modulo);
		} else {
			require_once("404.php");
		}
		   
	}
?>