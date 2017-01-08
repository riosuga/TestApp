<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
your time : <?php 
$time = $_POST['usr_time']; 
$date = new DateTime($time);
echo $date->format('H').'<br>';
echo $date->format('i');
?>
kimi no nawa : <?php echo $_POST["nama"]; ?>
</body>
</html>