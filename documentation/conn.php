<?php 
	// $servername = "hr";
	// $username = "hr";
	// $password = "hr";

	// try{
	// 	$conn = new PDO("mysql:host=$servername;dbname=hr;",$username, $password);
	// 	$conn->setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	echo "conected succesfully";
	// }catch{
	// 	echo "conecction fail";
	// }

$conn = oci_connect('hr','hr','localhost/XE');
if(!$conn){
	$e = oci_error();
	trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM employees');
oci_execute($stid);

echo "<table border='1'>\n";
while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)){
	echo"<tr>\n";
	foreach($row as $rows){
		echo "	<td>".($rows !== null ? htmlentities($rows, ENT_QUOTES) : "&nbsp;") . "</td>\n";;
	}
	echo"</tr>\n";
}
echo "</table>\n";

?>