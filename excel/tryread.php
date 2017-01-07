<?php
	require_once 'Classes/PHPExcel.php'; 
	$conn = oci_connect('hr', 'hr', 'localhost/XE');

	if (!$conn) 
	{
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}

	$stid = oci_parse($conn,'SELECT * from HR.REGIONS');
	oci_execute($stid);
	while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)){
		$data[] = $row;
	}
	var_dump($data);

	// $fileName = "CUST-BC23.xlsx";
	$fileName = "Hentai.xls";
	$excelReader = PHPExcel_IOFActory::createReaderForFile($fileName);
	$excelObj = $excelReader->load($fileName);
	$workSheet = $excelObj->getActiveSheet(); //parti pakai yang terakhir
	$lastRow = $workSheet->getHighestRow();
	
	$excelArr = $workSheet->toArray(null,true,true,true);
	// $ikeh =  explode(' ',$excelArr[1]["A"]);
	// $ikeh = preg_split('/[;, \n]+/',$excelArr[1]["A"]);
	$highestRow = $workSheet->getHighestRow();
	

	?><table border="1px"><tr><th>Nama</th></tr><?php
//  Loop through each row of the worksheet in turn
	for ($row = 2; $row <= $highestRow; $row++) {
    //  Read a row of data into an array
    $rowBData = $workSheet->rangeToArray('A' . $row . ':' . 'A' . $row);
	$rowCData = $workSheet->rangeToArray('B' . $row . ':' . 'B' . $row);
	
	foreach($rowBData[0] as $k=>$v){
		// var_dump($rowBData);
		// foreach($rowCData[0] as $a=>$b){
		// 	echo "<tr><td>".$v."</td><td>".$b."</td>";
		// }
		echo "<tr><td>".$v."</td>"	;
		echo "</tr>";
	}
    /*foreach($rowData[0] as $k=>$v){
		echo "Row: ".$row."- Col: ".($k+1)." = ".$v."<br />";
	} */
}
echo "</table>";
?>





<!--
	// echo"<table>";
	// for($row=1; $row <= $lastRow; $row++){
	// 	echo"<tr><td>";
	// 	echo $workSheet->getCell('A'.$row)->getValue();
	// 	echo "</td><td>";
	// 	echo $workSheet->getCell('B'.$row)->getValue();
	// 	echo"</td></tr>";
	// }
	// echo"</table>";

	$db = '';
--> 