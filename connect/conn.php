
<?php
$conn = oci_connect('hr', 'hr', 'localhost/XE');
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$car ="07000000085520161011000715";
$stid = oci_parse($conn,'SELECT distinct employee from hr.emplyee where to_number(id_employee) >= 600');
oci_execute($stid);

$jumalhKolom = oci_num_fields($stid);


echo "<table border='1'>\n";
echo "<tr>\n";
	for($i= 1; $i<= $jumalhKolom; $i++){
		$namaKolom = oci_field_name($stid,$i);
		$typeField = oci_field_type($stid,$i);
		echo "<td>".$namaKolom."</td>\n";
		// echo "<td>".$typeField."</td>\n";

	}
echo "</tr>\n";
// $xx = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
// var_dump($xx);
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
	echo "<tr>\n";
	foreach ($row as $rows) {
		echo "	<td>".($rows !== null?htmlentities($rows, ENT_QUOTES):"&nbsp;")."</td>\n";

	}
	echo "</tr>\n";
}
echo "</table>\n";

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['car'])){
			$dataUtuh = $_POST['car'];
			$dataPecah = explode(',',$dataUtuh);
			$datapecah[] = $dataPecah;
		}
	}

?>