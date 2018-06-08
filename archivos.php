<?php
echo "hola";
$path = "./data.txt";
$file = fopen($path, "w+");
fputs($file, "Prueba de escritura");
fclose($file);
		

?>
