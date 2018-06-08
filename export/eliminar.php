<html>
<head>
<title>
Cruz cotizador - Eliminar articulo.
</title>
</head>
<body>
<?php

header("Content-Type: text/html;charset=utf-8");

?>
<meta http-equiv="refresh" content="5; url=./listado.php" />
<?php

// Create connection
$con = mysqli_connect("localhost", "id3786819_root", "new14you", "id3786819_cruz");

// Check connection
if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    // Escape any html characters

        $pid = $_GET['pid'];



//        mysqli_query($con, "INSERT INTO productos VALUES ('$productoNombre', '$productoPrecio')");
	mysqli_query($con, "DELETE FROM productos WHERE pid=". $pid);

	echo "El articulo fue eliminado.";
		


?>
</body>

