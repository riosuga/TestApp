<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
	 $url = "http://localhost:9090/skdsdksldks?wsdl";
		if(isset($_POST['carRespon2']) && isset($_POST['jnsRespon2']) && isset($_POST['seqRespon2'])){
			 $car = $_POST['carRespon2'];
   			 $jnsRespon = $_POST['jnsRespon2'];
			 $seqRespon = $_POST['seqRespon2'];
             $params = array('ediNumber'=>$car,'jnsRespon'=>$jnsRespon,'seq_respon'=>$seqRespon);
			 $client  = new SoapClient($url);
			 $hasil = $client->kirimUlangxxxxx($params);
		}
	}
?>