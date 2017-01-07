<?php 
// 	$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
// 	$rand_keys = array_rand($input, 2);
// 	echo $input[$rand_keys[0]] . "\n";
// 	echo $input[$rand_keys[1]] . "\n";

	$username = 'xxxxx';//username
	$password = 'skdsdksldks120xxxxx';//password
	$db = '172.0.0.124:9999/skdsdksldks'; //db oracle

	$username1 = 'xxxxx';
	$password1 = 'xxxxx';
	$db1 = '172.0.0.53:9999/xxxxx';

	$conn = oci_connect($username1,$password1,$db1);
	if(!$conn){
		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		echo "error to konek";
	}

	$stid = oci_parse($conn, 'SELECT car,kd_status,wkt_status FROM xxxxx.tep_peb_proses WHERE kd_kantor = :kdKantor ORDER BY wk_rekam DESC');
	$kdKantor = "060100";
	// $kd_status2 = "12";
	// $kd_status3 = "13";

	oci_bind_by_name($stid, ":kdKantor",$kdKantor);
	// oci_bind_by_name($stid, ":kd_status2",$kd_status2);
	// oci_bind_by_name($stid, ":kd_status3",$kd_status3);
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
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
		echo "<tr>\n";
		foreach ($row as $rows) {
			echo "	<td>".($rows !== null?htmlentities($rows, ENT_QUOTES):"&nbsp;")."</td>\n";
		}
		echo "</tr>\n";
	}
	echo "</table>\n";

 ?>

 