<?php 
	$string =  "aku,kamu,dia";
	$pecah = explode(",",$string);

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['katakata'])){
			$output = $_POST['katakata'];
			$pecah = explode(' ', $output);
			foreach($pecah as $datah){
				echo $datah."<br/>";
			}
		}
	}
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="post" action="#">
 		 <input type="text" name="katakata" id="katakata">
 		 <input type="submit" value="submit" name="submit">
 	</form>
 </body>
 </html>