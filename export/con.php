<?php  
	function conectarse()  
	{  
		if (!($link=mysql_connect("localhost","root","new14you")))  
	{	  
		echo "Error conectando a la base de datos.";  
		exit();  
	}  
	if (!mysql_select_db("productos",$link))  
	{  
		echo "Error seleccionando la base de datos.";  
		exit();  
	}  
	return $link;  
}  
?>  
