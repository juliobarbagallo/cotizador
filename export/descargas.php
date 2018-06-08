<?php
$dir=opendir("./");
while($archivo=readdir($dir))
{
//echo $archivo;
if($archivo != "." && $archivo != ".." && substr($archivo,-5)==".html"){
echo "<a href=\"".$archivo."\">".$archivo."</a><br/>";
echo "<br>";
}
}
?> 
