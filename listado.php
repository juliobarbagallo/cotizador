<html>
<head>
<title>Cruz cotizador - Articulos.</title>
<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
<script language="JavaScript">
function confirmar ( mensaje ) {
return confirm( mensaje );
}
</script>

<?php
$mysqli = new mysqli("localhost", "root", "new14you", "cruz");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT * FROM productos ORDER BY productoNombre ASC";

echo "<table border='4'>";
echo "<tr bgcolor='#000080'><td align='center'><font color='#FFFFFF'><b>Prodcuto</b></td><td><font color='#FFFFFF'><b>Precio</b></td><td align='center'><font color='#FFFFFF'><b>Acción</b></td> <td> <select onchange='location.href=this.options[this.selectedIndex].value'
name='elige' size='1'> <option value='#' selected>Menú</option> <option value='./index.php'>Inicio</option> <option value='./descargas.php'>Presupuestos</option> <option value='./agregarespecial.php'>+ Articulo</option></select> </td>";

if ($resultado = $mysqli->query($consulta)) {

    /* obtener el array de objetos */
    $contador = 0;
    while ($fila = $resultado->fetch_row()) {
        //printf ("%s (%s)\n", $fila[1], $fila[2]);
	$pid = $fila[0];
	if($contador%2==0){
	echo "<tr bgcolor='#C0C0C0'><td>". $fila[1] . "</td><td>$". $fila[2] ."</td><td><a href='modificar.php?pid=$pid&articulo=$fila[1]&precio=$fila[2]'> Modificar</a></td><td> <a href='eliminar.php?pid=$pid&articulo=$fila[1]&precio=$fila[2]' onclick='return confirmar('¿Está seguro que desea eliminar el registro?');'> Eliminar</a></td></tr>";
	
    }else{
   
    	echo "<tr bgcolor='#b3b6b7'><td>". $fila[1] . "</td><td>$". $fila[2] ."</td><td><a href='modificar.php?pid=$pid&articulo=$fila[1]&precio=$fila[2]'> Modificar</a></td><td> <a href='eliminar.php?pid=$pid&articulo=$fila[1]&precio=$fila[2]' onclick='return confirmar('¿Está seguro que desea eliminar el registro?');'> Eliminar</a></td></tr>";

    }
	$contador++;
}
echo "</table>";

    /* liberar el conjunto de resultados */
    $resultado->close();
}

/* cerrar la conexión */
$mysqli->close();
?>
<br><br>
</body>
</html>
