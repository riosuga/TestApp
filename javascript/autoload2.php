<?php 
// 	$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
// 	$rand_keys = array_rand($input, 2);
// 	echo $input[$rand_keys[0]] . "\n";
// 	echo $input[$rand_keys[1]] . "\n";

	$username = 'xxxxx';//username
	$password = 'skdsdksldks120xxxxx';//password
	$db = '172.0.0.124:9999/skdsdksldks'; //db oracle

	$conn = oci_connect($username,$password,$db);
	if(!$conn){
		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		echo "error to konek";
	}

	$stid = oci_parse($conn, 'SELECT count(car),kd_status FROM xxxxx.vi_impor_pending WHERE kd_status IN(:kd_status1,:kd_status2,:kd_status3,:kd_status4,:kd_status5) group by kd_status');
	$kd_status1 = "10";
	$kd_status2 = "15";
	$kd_status3 = "20";
	$kd_status4 = "25";
	$kd_status5 = "45";

	oci_bind_by_name($stid, ":kd_status1",$kd_status1);
	oci_bind_by_name($stid, ":kd_status2",$kd_status2);
	oci_bind_by_name($stid, ":kd_status3",$kd_status3);
	oci_bind_by_name($stid, ":kd_status4",$kd_status4);
	oci_bind_by_name($stid, ":kd_status5",$kd_status5);
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
		// var_dump($row);
		echo "<tr>\n";
		foreach ($row as $rows) {
			echo "	<td>".($rows !== null?htmlentities($rows, ENT_QUOTES):"&nbsp;")."</td>\n";

		}
		echo "</tr>\n";
	}
	echo "</table>\n";

 ?>

 