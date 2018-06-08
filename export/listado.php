<script language="JavaScript">
function confirmar ( mensaje ) {
return confirm( mensaje );
}
</script>

<?php
$mysqli = new mysqli("localhost", "id3786819_root", "new14you", "id3786819_cruz");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT * FROM productos";

echo "<table>";
echo "<tr><td align='center'>Prodcuto</td><td>Precio</td><td align='center'>Acción</td>";

if ($resultado = $mysqli->query($consulta)) {

    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row()) {
        //printf ("%s (%s)\n", $fila[1], $fila[2]);
	$pid = $fila[0];
	echo "<tr><td>". $fila[1] . "</td><td>". $fila[2] ."</td><td><a href='modificar.php?pid=$pid&articulo=$fila[1]&precio=$fila[2]'> Modificar</a></td><td> <a href='eliminar.php?pid=$pid&articulo=$fila[1]&precio=$fila[2]' onclick='return confirmar('¿Está seguro que desea eliminar el registro?');'> Eliminar</a></td></tr>";
    }
echo "</table>";

    /* liberar el conjunto de resultados */
    $resultado->close();
}

/* cerrar la conexión */
$mysqli->close();
?>

