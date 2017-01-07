<?php 
	require_once 'Classes/PHPExcel.php'; 
	$conn = oci_connect('hr', 'hr', 'localhost/XE');

	if (!$conn) 
	{
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}

	$fileName = "Hentai.xls";
	$excelReader = PHPExcel_IOFActory::createReaderForFile($fileName);
	$excelObj = $excelReader->load($fileName);
	$workSheet = $excelObj->getActiveSheet(); //parti pakai yang terakhir
	$lastRow = $workSheet->getHighestRow();
	
	$excelArr = $workSheet->toArray(null,true,true,true);

	for($i=2; $i<=$lastRow; $i++){
		// $rowBData = $workSheet->rangeToArray('A' . $row . ':' . 'A' . $row);
		// $dataSheet[] = $excelArr[$i]["A"];
			$stid = oci_parse($conn,'SELECT * from HR.REGIONS where region_id = :value_bv');
			oci_bind_by_name($stid,":value_bv",$excelArr[$i]["A"]);
			oci_execute($stid);
			$save = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);	
		}
	var_dump($res);
 ?>