<?php 
	require_once 'Excel/reader.php';
	$data = new Spreadsheet_Excel_Reader();
	$data->setOutputEncoding('CP1251');

	$data->read('hentai.xls');

	// var_dump($data);
	// error_reporting(E_ALL ^ E_NOTICE);
	$startRow = 1;
	$endRow =3;
	$coll = 3;

for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		echo $data->sheets[0]['cells'][$i][$j]." ";
	}
	echo "\n";

}
	// for($i = $startRow;$i<$endRow;$i++){
	// 	echo $data->sheets[0]["cells"][$i][$coll]."<br>";
	// }
	
	
 ?>