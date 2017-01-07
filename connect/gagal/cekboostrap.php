<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
	<div>
		<div id="container">
		<div id="form-input">
			<form method="post" action="#">
				<input type="text" name="car" placeholder="insert car here" id="car"></input><br/>
				<!-- <input type="text" name="kantor" id="kantor" placeholder="insert kode kantor here"></input><br/> -->
				<input type="submit" name="submit" value="Submit"></input>
			</form>
		</div>
	</div>
	<div> 
		<?php if($_SERVER['REQUEST_METHOD']=='POST'){
				$url = "http://localhost:9090/skdsdksldks?wsdl";
				$client = new SoapClient($url);
				$hasil = $client->cariProses(array('car'=>$_POST['car']));
				$hasil = json_decode(json_encode($hasil),true);
				?>
		<table class="table table-bordered">
			<tr>
				<td>Car</td>
				<td>Kode Kantor</td>
				<td>Seq Peb</td>
				<td>Status Saat Ini</td>
				<td>Uraian Status</td>
				<td>Id xxxxxtir</td>
				<td>Nama xxxxxtir</td>
				<td>Nama PPJK</td>
				<td>Waktu Dokumen Dibuat</td>
				<td>Waktu Respon Dokumen</td>  
			</tr>
			<tr>
				<td>1234567818</td>
				<td>040300</td>
				<td>N</td>
				<td>bismillah.com</td>
			</tr>
		</table>
	</div>
     
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>
</html>