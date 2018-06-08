<html>
<head>
<title>Cruz cotizador - Eliminar archivo presupuesto.</title>
<!--<meta http-equiv="refresh" content="4; url=./descargas.php" />-->
</head>
<body>
<?php
$archivo = $_GET['archivo'];


if(unlink($archivo)){
	
	echo "El archivo: " .$archivo. " fue eliminado <img src='./imagenes/deleted.jpeg' style='max-width: 30px; max-height: 30px'/>";
	
}else{echo "Error al intentar eliminar el archivo.";}



?>
</body>
</html>
