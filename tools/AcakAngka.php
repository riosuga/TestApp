<?php 
	function randomGen($min, $max, $quantity) {
	    $numbers = range($min, $max);
	    shuffle($numbers);
	    return array_slice($numbers, 0, $quantity);
	}

	$numbers = range(1,20);
	shuffle($numbers);
	// print_r($numbers);
	foreach ($numbers as $angka) {
		echo $angka.'<br>';
	}

	print_r($numbers);

?>