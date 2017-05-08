<?php 

$data = array('<script src="https://www.w3schools.com/js/myScript2.js"></script>','<script src="https://www.w3schools.com/js/myScript2.js"></script>');

	foreach (array_map('htmlspecialchars', $data) as $value) {
		echo $value.'<br>';
	}

 ?>