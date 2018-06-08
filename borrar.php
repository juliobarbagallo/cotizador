<?php
function getFiles($path) {
	$files = array();
	$fileNames = array();
	$i = 0;
	if (is_dir($path)) {
		if ($dh = opendir($path)) {
			while (($file = readdir($dh)) !== false) {
				if ($file == "." || $file == "..") continue;
					$fullpath = $path . "/" . $file;
					$fkey = strtolower($file);
					while (array_key_exists($fkey,$fileNames))
						$fkey .= " ";
					$a = stat($fullpath);
					$files[$fkey]['size'] = $a['size'];
					if ($a['size'] == 0)
						$files[$fkey]['sizetext'] = "-";
					else if ($a['size'] > 1024)
						$files[$fkey]['sizetext'] = (ceil($a['size']/1024*100)/100) . " Kb";
					else if ($a['size'] > 1024*1024)
						$files[$fkey]['sizetext'] = (ceil($a['size']/(1024*1024)*100)/100) . " Mb";
					else
						$files[$fkey]['sizetext'] = $a['size'] . " bytes";
					$files[$fkey]['name'] = $file;
					$files[$fkey]['type'] = filetype($fullpath);
					$fileNames[$i++] = $fkey;
			}
			closedir($dh);
		} else die ("No pudo abrirse el directorio: $path");
	} else die ("La ruta no es un directorio: $path");
	sort($fileNames,SORT_STRING);
	$sortedFiles = array();
	$i = 0;
	foreach($fileNames as $f)
		$sortedFiles[$i++] = $files[$f];
	return $sortedFiles;
}
$dir = "./"; // Ahí pones el directorio
// Comprobamos si el nombre pasado tiene "/" (para evitar salir de directorios, lee debajo del code) o si no existe
if(!isset($_GET['archivo']) || !preg_match('/[^\/]/',$_GET['archivo']) || $_GET['archivo']=="." || $_GET['archivo']==".."){
	$files = getFiles($dir);
	#foreach ($files as $file) echo "&nbsp;&nbsp;&nbsp;&nbsp;<b><a href=\"./?archivo=".$file[name]."\">".$file[name]."</a></b><br>\n";
#	foreach ($files as $file) echo "&nbsp;&nbsp;&nbsp;&nbsp;<b><a href=\"./borrar.php?archivo=".$file[name]."\">".$file[name]."</a></b><br>\n";

	foreach ($files as $file) echo "&nbsp;&nbsp;&nbsp;&nbsp;<b><a href=\"./borrar.php?archivo=".$file[name]."\">".$file[name]."</a></b>".date("F d Y H:i:s.",filemtime($file[name]))."<br>\n";

}
else {
	if (file_exists($dir.$_GET['archivo'])) {
		unlink($dir.$_GET['archivo']);
		die("Archivo eliminado.\n");
	} else
		die("El archivo ".$_GET['archivo']." no existe.\n");
}
?>
