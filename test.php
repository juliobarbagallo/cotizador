<html>
<head>
<title>

</title>
</head>


<body>
<?php

"$claves = preg_split("/[\t]+/", "hypertext language	programming	ultima");
#$claves = preg_split("/[\t]", "hypertext language   programming");
#print_r($claves);
#echo $claves[0];



$pizza  = "porción1 porción2 porción3 porción4 porción5 porción6";
$porciones = explode(" ", $pizza);
echo $porciones[0]; // porción1
echo $porciones[1]; // porción2


?>

</body>
</html>
