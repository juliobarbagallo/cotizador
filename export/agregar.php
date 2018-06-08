<html>
<head>
<title>
Cruz cotizador - Agregar articulo.
</title>
</head>
<body>
<?php

header("Content-Type: text/html;charset=utf-8");


// Create connection
$con = mysqli_connect("localhost", "id3786819_root", "new14you", "id3786819_cruz");

// Check connection
if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['precio'])) {
    // Escape any html characters

        $productoPrecio = $_POST['precio'];
	//echo $productoPrecio;
	echo "<br>";
	$productoNombre = $_POST['articulo'];
	$productoNombre = str_replace('-','"',$productoNombre);
	//echo $productoNombre;



        mysqli_query($con, "INSERT INTO productos VALUES ('$productoNombre', '$productoPrecio')");

}else{

        echo "Error. Verifique que haya ingresado un precio valido.";
}

?>
</body>

