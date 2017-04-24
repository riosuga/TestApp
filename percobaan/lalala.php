<?php 
	
 	
	echo date('01-m-Y');

	$angka = number_format(500000, 2, ',', '.');
	echo $angka;
	
	$kata = date("m");
	if(substr($kata, 0, 1) == 0){
		echo '<br>';
		echo substr($kata,-1);
	}else{
		echo '<br>';
		echo 'huu';
	}

	$string = 'Z';
	$string++;
	echo $string;
 ?>