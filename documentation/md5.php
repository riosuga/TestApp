<?php 
	$a = "Bismillah";
	echo openssl_digest($a, 'sha512');
	
	$array1 =  array(
		'nama' =>'roi',
		'nama_pelajaran' =>'bahasa arab',
		'nilai' => '76');
	$array2 = array(
		'nama' =>'rio',
		'nama_pelajaran' =>'bahasa inggris',
		'nilai' => '97');

	$arrFix = array_merge($array1, $array2);
	var_dump($arrFix);
	// public function set
 ?>