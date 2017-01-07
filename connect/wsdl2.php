<?php 
	$url = "http://localhost:9090/skdsdksldks?wsdl";
	$client = new SoapClient($url);

	if(isset($_POST['carzz']) && isset($_POST['jnsRezz']) && isset($_POST['seqRezz'])){

				$inputa = $_POST['carzz'];
				$inputb = $_POST['jnsRezz'];
				$inputc = $_POST['seqRezz'];

				$hasil = $client->kirimUlangxxxxx(array('ediNumber'=>$inputa,'jnsRespon'=>$inputb,'seqRespon'=>$inputc));
				$hasil = json_decode(json_encode($hasil),true);

				if(empty($hasil)){
					echo 'Gagal dikirim ulang.';
				}else{
					echo 'Berhasil dikirim ulang.';
				}

	}
	else if(isset($_POST['caryy']) && isset($_POST['jnsResyy']) && isset($_POST['seqReyy'])){

				$inputa = $_POST['caryy'];
				$inputb = $_POST['jnsResyy'];
				$inputc = $_POST['seqReyy'];

				$hasil = $client->kirimUlangImpor(array('ediNumber'=>$inputa,'jnsRespon'=>$inputb,'seqRespon'=>$inputc));
				$hasil = json_decode(json_encode($hasil),true);

				if(empty($hasil)){
					echo 'Gagal dikriim ulang.';
				}else{
					echo 'Berhasil dikrim ulang.';
				}

	}else{
		echo 'Gagal masuk validasi kirim ulang.';
	}
?>