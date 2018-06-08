
<html>

<head>

<title>Cruz cotizador - Inicio.</title>

<link rel="stylesheet" href="./css/bootstrap.css">

</head>

<body>
<h3>Cruz cotizador.</h3>
<h4>Pegue el listado de articulos a cotizar, copiando y pegando desde el archivo excel.</h4>
<form method="POST" action="./procesar.php">

<textarea name="listado" rows="25" cols="120"></textarea>
<br>
<input type="submit" name="procesar" value="Procesar"/>

<input type="reset" value="Cancelar"/>
<input align= "right" type="number" name="porcentaje" min="1" max="50"><i>% (Calcula el precio del articulo sumando el porcentaje agregado)</i>
<br>
</form>

<br>
<a href="./listado.php">Lista de articulos.</a> | <a href="./agregarespecial.php">Agregar articulo al inventario.</a> | <a href="./descargas.php">Presupuestos.</a>
<br>
<br>
<br>

</body>

</html>
