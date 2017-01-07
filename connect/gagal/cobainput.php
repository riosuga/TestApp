<!DOCTYPE html>
<html>
<head>
	<title>Testing xxxxx - Search xxxxx</title>
</head>
<body>
	<div id="container">
		<div id="form-input">
			<form method="post" action="#">
				<input type="text" name="car" placeholder="insert car here" id="car"></input><br/>
				<!-- <input type="text" name="kantor" id="kantor" placeholder="insert kode kantor here"></input><br/> -->
				<input type="submit" name="submit" value="Submit"></input>
			</form>
		</div>
		<?php if($_SERVER['REQUEST_METHOD']=='POST'){
				$url = "http://localhost:9090/skdsdksldks?wsdl";
				$client = new SoapClient($url);
				$hasil = $client->cariProses(array('car'=>$_POST['car']));
				$hasil = json_decode(json_encode($hasil),true);
				?>
		<div id="form-output">
			<table border ="1">
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
				 <?php foreach($hasil as $value):?>
				<tr>
					<?php //var_dump($value);?>
					<td><?php echo $value['car'];?></td> 
					<td><?php echo $value['kdKantor'];?></td>
					<td><?php echo $value['seqPeb'];?></td>
					<td><?php echo $value['kdStatus'];?></td>
					<td><?php echo $value['urStatus'];?></td>
					<td><?php echo $value['idEks'];?></td>
					<td><?php echo $value['nmEks'];?></td>
					<td><?php echo $value['nmPPJK'];?></td>
					<td><?php echo $value['wkRekam'];?></td>
					<?php if(array_key_exists('wkStatus', $value)) {?>
					<td><?php echo $value['wkStatus']; ?></td>
					<?php } else {?>
					<td>Null</td>
					<?php  }?> 
				</tr>
					<?php endforeach; ?>

			</table>
		</div>
		<?php }?>
	</div>
</body>
</html>

