<html>
<head>
<title>
Cruz cotizador - Agregar articulo.
</title>
<link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
<meta http-equiv="refresh" content="5; url=./index.php" />
<?php


$servername = "localhost";
$username = "root";
$password = "new14you";
$dbname = "cruz";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if (isset($_POST['precio'])) {

	$productoPrecio = $_POST['precio'];
	$productoNombre = $_POST['articulo'];
#	$pos = strpos($productoNombre, '"');
#	if($pos !== false){
#		$productoNombre = str_replace('"', '-', $productoNombre);
#	}
	$con=mysqli_connect("localhost","root","new14you","cruz");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	echo "$productoNombre <br>";
	$productoNombre = mysqli_real_escape_string($con, $productoNombre);
	echo $productoNombre;

	$sql = "INSERT INTO productos (productoNombre, productoPrecio)
	VALUES ('$productoNombre', '$productoPrecio')";

	if ($conn->query($sql) === TRUE) {
		echo "El articulo fue agregado con exito.";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}$conn->close();


}


?>
</body>

