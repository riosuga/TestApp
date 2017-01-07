<?php
//buat fungsi exception
	function cekAngka($number){
		if($number>1){
		throw new Exception("Angka harus dibawah 1");
		}
		return true;
	}
//terpelatuk try catch
	try{
		cekAngka(0);
	}
	catch(Exception $ex){
		echo 'Message :'.$ex->getMessage();
	}
?>