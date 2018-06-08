<html>
<head>
<title>
Cruz cotizador - Modificar articulo.
</title>
<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>


<?php  
$pid=$_GET['pid'];
$articulo=$_GET['articulo'];
$precio=$_GET['precio'];

?>
<form name="modifica" method="post" action="./modifica.php">
	Articulo:</br>
	<textarea rows="5" cols="100" name="articulo"><?php echo $articulo;    ?> </textarea></br>
	Precio: <input type="text" name="precio" value="<?php echo $precio;?>" />
	<input type="hidden" name="pid" value="<?php echo $pid;?>" />
	<input name="Submit" type="submit" value="Modificar."/>
</form>


<?php
?>

</body>
</html>
