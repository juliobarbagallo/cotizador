<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>
Cruz cotizador
</title>

<script type="text/javascript">
<!--
function ventanaNueva(){ 
	window.open('agregar.php','width=300, height=400')
}
//-->

</script>

</head>
<body>
<?php
header("Content-Type: text/html;charset=utf-8");
$servername = "localhost";
$username = "id3786819_root";
$password = "new14you";
$dbname = "id3786819_cruz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//echo $_POST['porcentaje'];

if (isset($_POST['listado'])) {
    // Escape any html characters
#    echo htmlentities($_POST['listado']);

	$lineaAProcesar=explode("\n",$_POST["listado"]);
	#$cantidad = preg_split("/[\t]/", "$arraytostring");
#	print_r($cantidad);
	$largoArray=count($lineaAProcesar);



	date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha=date("YmdHis");
        $rutaArchivo = "./" . $fecha . ".html";
        $archivo = fopen($rutaArchivo, "a+");

        fputs($archivo, "<DOCTYPE html>");
        fputs($archivo, "<html>");
        fputs($archivo, "<head>");
        fputs($archivo, "<title>Cotizador Cruz maquinas</title>");
        fputs($archivo, "<meta charset=\"UTF-8\">");
        fputs($archivo, "</head>");
        fputs($archivo, "<body>");
        fputs($archivo, "<h1>Cruz Maquinas.</h1><br>");
        fputs($archivo, "De Sergio Gabriel Cruz<br>");
        fputs($archivo, "Cuit: 20-24170019-5 - IVA RESPONSABLE INSCRIPTO<br>");
        fputs($archivo, "Curapaligue 1476 (1406) CABA<br>");
        fputs($archivo, "TE: 4921-9021<br>");
        fputs($archivo, "Celular: 155-307-4302<br>");
        fputs($archivo, "Mail: cruzmaquinas1974@gmail.com<br>");
        fputs($archivo, "<table>");
        fputs($archivo, "<tr><td align=\"center\"><b>Cantidad</b></td><td align=\"center\"><b>Descripcion</b></td><td align=\"center\"><b>Precio unitario</b></td><td align=\"center\"><b>Total</b></td></tr>");




	for($i=0; $i<$largoArray; $i++)
	{
		$splitLinea = preg_split("/[\t]/", "$lineaAProcesar[$i]");
		if (count($splitLinea) == 2)
		{
			$cantidad = $splitLinea[0];
			$articulo = strtolower(substr($splitLinea[1], 0, 8));
			echo "<br>";
	#		$sql = sprintf('SELECT * FROM productos WHERE productoNombre LIKE "%%%s%%"', str_replace('"', '', $lineaAProcesar[$i]));
			$sql = sprintf('SELECT * FROM productos WHERE productoNombre LIKE "%%%s%%"', str_replace('"', '', $articulo));
			$result = $conn->query($sql);
			$row = $result->fetch_array();
			$en = strtolower($row["productoNombre"]);
		

			if($en!=""){
				if(isset($_POST['porcentaje']) && !empty($_POST['porcentaje'])){
					$porcentaje = $_POST['porcentaje'];
					$precioUnitario = (($row["productoPrecio"] * $porcentaje) / 100) + $row["productoPrecio"];
				}else{
					$precioUnitario = $row["productoPrecio"];
				}
				$precioTotalProducto=$precioUnitario * $cantidad;
				fputs($archivo, "<tr><td>".$splitLinea[0]."</td><td>".$splitLinea[1]."</td><td>".$precioUnitario."</td><td>".$precioTotalProducto."</td></tr>");
			
			}else{
				echo "Articulo: $splitLinea[1] <font color='red'><b>[ERROR - No encontrado.]</b></font>";
				$item = str_replace('"','-',$splitLinea[1]);
				echo "<br>";
				?>
				<form name="alta" method="post" action="./agregar.php" target="_blank">
					<input type="hidden" name="articulo" value="<?php echo $item;?>" />
					Precio: <input type="text" name="precio">
					<input name="Submit" type="submit" value="Agregar articulo al inventario."/>
				</form> 
				<?php
				echo "<br>";
			}
		}

	}
}
$conn->close();
fputs($archivo, "</table>");
fputs($archivo, "La mercadería esta sujeta a las características técnicas solicitadas<br>");
$fecha=date("d-m-Y");
fputs($archivo, "FECHA DE COTIZACIÓN DEL PRESENTE: " . $fecha . "<br>");
fputs($archivo, "PRESUPUESTO VALIDO POR: 45 días.<br>");
fputs($archivo, "</body>");
fputs($archivo, "</html>");
fclose($archivo);

?>
</body>
</html>
