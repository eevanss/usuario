<?php

    $CODIGO=$_POST[ 'codigo' ];
    $PASS=$_POST[ 'pass' ];
	
	if($CODIGO==303733335 and $PASS==303733335){
	echo"BIENVENIDO ".$CODIGO;
	}else{
	echo"Codigo o Pasword incorrecto";
	echo"<br/>";
	echo"vuelve a intentarlo ";
	echo "<a href=ind.php> Regresar </ a>";

	}
?>