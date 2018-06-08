<?php
 require_once './PasswordHash.Class.php';
 $Contrasena = new PasswordHash(8, FALSE);
 $Clave = $Contrasena->HashPassword("cruz");
echo $Clave;
?>
