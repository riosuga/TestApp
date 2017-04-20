<?php 
// $a = 'a';
// 	for($i = 1 ;$i<= 14; $i++){
// 		echo $i;
// 		if($i%3 ==0){
// 			echo '<br>';
// 		}
// 	}

	// $a = 'a';
	//  $a++;
	//  echo $a;

if(0>0){
	echo "yey";
}else{
	echo "fuck";
}
 ?>

 <!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<style type="text/css">
		table,tr,td{
			border : 1px solid black;
		}
	</style>
		<table style="width: 100%">
			<?php 
			$x = 5;
			$a = 'A';
			for($i=1;$i<=$x;$i++){
				echo '<tr>';
				for ($j=1; $j <=3 ; $j++) { 
					if($a > "C"){
						$a ='A';
					}
					echo '<td>'.$a.$i.'</td>';
					$a++;
				}
				echo '</tr>';
			}
			?>
		</table>
	</body>
	</html>