<?php 
	$files = fopen("coba.txt","r");
	//magic
	while(!feof($files)){
		$str = fgets($files);
		// echo $str."<br>";
		$target = strpos($str,"|");
		echo $target."<br>";
	}
	
	fclose($files);
?>

$object = new method();