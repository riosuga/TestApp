<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$isi = $_POST['isi1'];
	$judul =$_POST['judul1'];

	$sql = "INSERT INTO post (judul, isi)
	VALUES ('$judul', '$isi')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


?>