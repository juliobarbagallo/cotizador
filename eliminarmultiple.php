<html>
<head>
<title>Cruz cotizador - Eliminar multiples archivos presupuesto.</title>
<meta http-equiv="refresh" content="4; url=./descargas.php" />
</head>
<body>



<?php

$x=$_POST[casilla];


foreach($x as $valor){

	if(unlink($valor)){
		echo "Archivo $valor eliminado. <br>";
	}



}

?>
</body>
</html>
