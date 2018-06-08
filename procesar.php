<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>
Cruz cotizador
</title>

<link rel="stylesheet" href="./css/bootstrap.css">

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
#$servername = "localhost";
#$username = "root";
#$password = "new14you";
#$dbname = "cruz";

$totalcotizado=0;

$mysqli = new mysqli("localhost", "root", "new14you", "cruz");
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}


//if (!empty($_POST['archivo'])) {


if (isset($_POST['listado'])) {
    // Escape any html characters
#    echo htmlentities($_POST['listado']);

	$lineaAProcesar=explode("\n",$_POST["listado"]);
	#$cantidad = preg_split("/[\t]/", "$arraytostring");
#	print_r($cantidad);
	$largoArray=count($lineaAProcesar);
	//$nombreArchivo = $_POST['archivo'];



	date_default_timezone_set("America/Argentina/Buenos_Aires");
        $fecha=date("YmdHis");
	$nombreArchivo=$fecha;
        $rutaArchivo = "./presupuestos/" . $nombreArchivo . ".html";
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

	if ($largoArray > 0) {
		$consulta = "SELECT * FROM productos";	
		$resultado = $mysqli->query($consulta);
		$mysqli->close();
		



		$encontrados[] = array();
		$tohtml[] = array();
		$contador = 0;
		for ($i=0; $i<$largoArray; $i++) {
			$encontrados[$i] = false;
		}	
    		while ($fila = $resultado->fetch_assoc()) {
			$articuloDB = $fila["productoNombre"];
			for ($i=0; $i<$largoArray; $i++) {
				$splitLinea = preg_split("/[\t]/", "$lineaAProcesar[$i]");
				$cantidad = $splitLinea[0];
				$articulo = $splitLinea[1];

				#echo "..$articulo.. -> ..$articuloDB..";
				#echo "<br>";
				if (trim($articulo) === trim($articuloDB)) {
					$encontrados[$i] = true;
					if(isset($_POST['porcentaje']) && !empty($_POST['porcentaje'])){
                                        	$porcentaje = $_POST['porcentaje'];
                                        	$precioUnitario = (($fila["productoPrecio"] * $porcentaje) / 100) + $fila["productoPrecio"];
                                	}else{
                                        	$precioUnitario = $fila["productoPrecio"];
                                	}
				$precioTotalProducto=$precioUnitario * $cantidad;
                                $total=$total+$precioTotalProducto;
                                #fputs($archivo, "<tr><td>".$splitLinea[0]."</td><td>".$splitLinea[1]."</td><td>$".$precioUnitario."</td><td>$".$precioTotalProducto."</td></tr>");
				$tohtml[$i] = "<tr><td>".$splitLinea[0]."</td><td>".$splitLinea[1]."</td><td>$".$precioUnitario."</td><td>$".$precioTotalProducto."</td></tr>";
				echo "Articulo: $articulo <font color='green'><b>[Encontrado.]</b></font>"; ?> <img src="./imagenes/ok.png" style="max-width: 30px; max-height: 30px" /> <?php
				echo "<br>";

				}
				}
			}
	#	} cierra while de la BD
		for ($i=0;$i<$largoArray;$i++){
			if($encontrados[$i] == false){
				$tohtml[$i] = false;
				$splitLinea = preg_split("/[\t]/", "$lineaAProcesar[$i]");
				$cantidad = $splitLinea[0];
				$articulo = $splitLinea[1];
	
				echo "Articulo: $articulo <font color='red'><b>[No encontrado.]</b></font>"; ?> <img src="./imagenes/warning.png" style="max-width: 30px; max-height: 30px" /> <?php
                                echo "<br>";
				/*	
				#$articulo = str_replace('"', '-', $articulo);
				$con=mysqli_connect("localhost","root","new14you","cruz");
        			if (mysqli_connect_errno()) {
                			echo "Failed to connect to MySQL: " . mysqli_connect_error();
        			}
				$articulo = mysqli_real_escape_string($con, $articulo);
				echo "-> $articulo";
				*/
                                ?>
				<!--	
                                <form name="alta" method="post" action="./agregar.php" target="_blank">
                                        <input type="hidden" name="articulo" value="<?php echo $articulo;?>" />
                                        Precio: <input type="text" name="precio">
                                        <input name="Submit" type="submit" value="Agregar articulo al inventario."/>
                                </form>
				-->
                                <?php
                                echo "<br>";
			echo "<br>";		
	
				
			}
		}
    		$resultado->free();
	}


}

for ($i=0;$i<$largoArray;$i++){
	if ($tohtml[$i] != false)
		fputs($archivo, $tohtml[$i]);
}


fputs($archivo, "<tr><td></td><td></td><td><b>Total:</b> </td><td>$".$total."</td></tr>");
fputs($archivo, "</table>");
fputs($archivo, "La mercadería esta sujeta a las características técnicas solicitadas<br>");
$fecha=date("d-m-Y");
fputs($archivo, "FECHA DE COTIZACIÓN DEL PRESENTE: " . $fecha . "<br>");
fputs($archivo, "PRESUPUESTO VALIDO POR: 45 días.<br>");
fputs($archivo, "</body>");
fputs($archivo, "</html>");
fclose($archivo);
//} # empty
//else { echo "Nombre de archivo no ingresado";}


?>

<a href="./index.php">Volver al index.</a> | <a href="./descargas.php">Presupuestos.</a>

</body>
</html>
