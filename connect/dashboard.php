<?php 
$conn = oci_connect('APPDEV', 'dboltp120appdev', '10.0.4.124:1521/dboltp');
if (!$conn) {
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

	/*
	070100	KPPBC TANJUNG PERAK
	070500	KPPBC JUANDA
	010700	KPPBC BELAWAN
	050500	KPPBC BANDUNG
	050100	KPU SOEKARNO-HATTA
	030700	KPPBC BANDAR LAMPUNG
	060100	KPPBC TANJUNG EMAS
	050900	KPPBC BEKASI
	051000	KPPBC CIKARANG
	010800	KPPBC MEDAN
	010100	KPPBC KUALA NAMU
	040400	KPPBC JAKARTA
	040300	KPU TANJUNG PRIOK
	050400	KPPBC MERAK
	080100	KPPBC NGURAH RAI
	*/


	$queryEkspor = 'SELECT count(car), a.kd_kantor, b.nm_kantor_pendek as nama_kantor from dbekspor.tep_peb_proses a, referensi.tr_kantor b where a.kd_kantor = b.kd_kantor  and trunc(a.wk_rekam) = trunc(sysdate) and a.kd_kantor in(
		070100,070500,010700,050500,050100,030700,060100,050900,051000,010800,010100,040400,040300,050400,080100)
		group by a.kd_kantor, nm_kantor_pendek';

	$queryImpor ='SELECT count(car), a.kd_kantor, b.nm_kantor_pendek as nama_kantor from dbimpor.tip_pib_ctl a, referensi.tr_kantor b where a.kd_kantor = b.kd_kantor  and trunc(a.wk_rekam) = trunc(sysdate) and a.kd_kantor in(
		070100,070500,010700,050500,050100,030700,060100,050900,051000,010800,010100,040400,040300,050400,080100)
		group by a.kd_kantor, nm_kantor_pendek';

	$stid = oci_parse($conn, $queryEkspor);
	$stid2 = oci_parse($conn,$queryImpor);
	oci_execute($stid);
	oci_execute($stid2);

// echo "<table border='1'>\n";
// while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
//     echo "<tr>\n";
//     foreach ($row as $item) {
//         echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
//     }
//     echo "</tr>\n";
// }
// echo "</table>\n";
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>DashBoardAsalAsalan</title>
	</head>
	<body>
		<div id="tableEkspor">
			<h2>Jumlah dokumen Ekspor</h2>
			<table border ='1'>
				<?php
				while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
					echo "<tr>\n";
					foreach ($row as $item) {
						echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
					}
					echo "</tr>\n";
				}
				?>
			</table>
		</div>
		<div id="tableImpor">
			<h2>Jumlah dokumen Impor</h2>
			<table border ='1'>
				<?php
				while ($row = oci_fetch_array($stid2, OCI_ASSOC+OCI_RETURN_NULLS)) {
					echo "<tr>\n";
					foreach ($row as $item) {
						echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
					}
					echo "</tr>\n";
				}
				?>
			</table>
		</div>
	</body>
	</html>
	<script type="text/javascript">
		setTimeout(function(){
	   window.location.reload(1);
	}, 60*1000*7);
	</script>