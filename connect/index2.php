<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- <link rel="icon" href="bootstrap-3.3.7-dist/../../favicon.ico"> -->

    <title>Dashboard Template for Bootstrap</title>
    <script src="jquery-3.1.1.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7-dist/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7-dist/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.7-dist/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7-dist/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">xxxxx</a></li>
            <li><a href="#">Impor</a></li>
            <li><a href="#">Help</a></li>
          </ul>          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#">Overview </a></li>
           <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pendaftaran
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="index5.php">Pendaftaran xxxxx</a></li>
                    <li><a href="index4.php">Pendaftaran Impor</a></li>
                </ul>
           </li>
            <li><a href="index3.php">Proses Impor</a></li>
            <li class="active"><a href="#">Proses xxxxx <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Tracking Data xxxxx</h1>
        <form method="post" action="#">
        <div class="form-group">
           <label class="control-label col-sm-2" for="email">Car:</label>
              <div class="col-sm-10">
                   <input type="number" min="27" class="form-control" id="car" name ="car" placeholder="insert car here" required>
              </div>
          <div class="row placeholders" style="padding-top: 55px;">
          <input class="btn btn btn-primary" type="submit" value="Submit">
          </div>
          <!-- <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default" value="Submit">Submit</button>
          </div> -->
        </div>
        </form>
        <?php
              if($_SERVER['REQUEST_METHOD']=='POST'){
               $url = "http:/xxxxxxx?wsdl";
               $client = new SoapClient($url);
               $hasil = $client->cariProses(array('car'=>$_POST['car']));
               $respon = $client->cariResponxxxxx(array('car'=>$_POST['car']));
               $hasil = json_decode(json_encode($hasil),true);
               $respon =json_decode(json_encode($respon),true);

        ?>
          <h2 class="sub-header">List Proses xxxxx</h2>
      <?php 
          if(empty($hasil)){ 
             $pesan =  "car/aju anda tidak ditemukan atau salah, silahkan cek kembali.";
             echo "<script type ='text/javascript'>alert('$pesan');</script>";
    ?>
        <!--<div class="table-responsive">
          <table class="table table-striped"> -->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="well text-center">
                    Car/ Aju tidak ditemukan.
                      </div>
                  </div>
            <!-- /.col-lg-12 -->
               </div>
          <!--</table>-->
      <!--  </div>-->
            <?php }?>
          <div class="table-responsive">
            <table class="table table-striped">
                      <div class="row">
                            <div class="col-lg-12">
                                <div class="well text-center">
                                    <?php foreach($hasil as $value):?>
                                  <?php echo $value['car'];?> - <?php echo $value['urStatus']; endforeach; ?>
                                </div>
                            </div>
                        <!-- /.col-lg-12 -->
                      </div>
              <thead>
                <tr>
                       <th>Kode Status</th>
                       <th>Kode Kantor</th>
                       <th>Seq Peb</th>
                       <th>Status Saat Ini</th>
                       <th>Id xxxxxtir</th>
                       <th>Nama xxxxxtir</th>
                       <th>Nama PPJK</th>
                       <th>Waktu Dokumen Dibuat</th>
                       <th>Waktu Respon Dokumen</th> 
                </tr>
              </thead>
              <tbody>
        <?php foreach($hasil as $value): ?>
        <tr>
               <?php //var_dump($value);?>
                      <td><?php echo $value['kdStatus'];?></td>
                      <td><?php echo $value['kdKantor'];?></td>
                      <td><?php echo $value['seqPeb'];?></td>
                      <td><?php echo $value['ketKdStatus'];?></td>
                      <td><?php echo $value['idEks'];?></td>
                      <td><?php echo $value['nmEks'];?></td>
                      <?php if(array_key_exists('nmPPJK', $value)) {?>
                         <td><?php echo $value['nmPPJK']; ?></td>
                     <?php } else { ?>
                         <td>Null</td>
                    <?php } ?>
                     <?php if(array_key_exists('wkRekam', $value)) {?>
                         <td><?php echo $value['wkRekam']; ?></td>
                     <?php } else { ?>
                         <td>Null</td>
                    <?php } ?>
                      <?php if(array_key_exists('wkStatus', $value)) {?>
                         <td><?php echo $value['wkStatus']; ?></td>
                     <?php } else { ?>
                         <td>Null</td>
                    <?php } ?>
          </tr>
          <?php endforeach;?> 
              </tbody>
            </table>
          </div>
        <!-- respon here -->
          <div class="row" style="padding-top: 25px;">
                  <div class="col-lg-12">
                      <div class="well text-center">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                  <thead>
                                        <tr>
                                               <th>Seq Respon</th>
                                               <th>Edi Number</th>
                                               <th>Nama xxxxxtir</th>
                                               <th>Nama PPJK</th>
                                               <th>Waktu Respon diBuat</th>
                                               <th>Versi Dokumen</th>
                                               <th>Jenis Respon</th>
                                               <th>Judul Umum</th>
                                               <th>Nama Respon</th>
                                               <th>Keterangan</th> 
                                        </tr>
                                  </thead>
                                    <?php foreach($respon as $value):?>
                                    <?php foreach($value as $final):?>
                                  <tbody>
                                    <td><?php echo $final['seqRespon']; ?></td>
                                    <td><?php echo $final['ediNumber']; ?></td>
                                    <td><?php echo $final['nmEks']; ?></td>
                                     <?php if(array_key_exists('nmPPJK', $final)) {?>
                                          <td><?php echo $final['nmPPJK']; ?></td>
                                    <?php } else { ?>
                                             <td>Tidak ada Nama PPJK.</td>
                                    <?php } ?>
                                    <?php if(array_key_exists('wkRekam', $final)) {?>
                                    <td><?php echo $final['wkRekam']; ?></td>
                                        <?php } else { ?>
                                   <td>Null</td>
                                        <?php } ?>
                                   <?php if(array_key_exists('versi', $final)) {?>
                                    <td><?php echo $final['versi']; ?></td>
                                        <?php } else { ?>
                                   <td>Null</td>
                                        <?php } ?>
                                   <?php if(array_key_exists('jnsRespon', $final)) {?>
                                    <td><?php echo $final['jnsRespon']; ?></td>
                                        <?php } else { ?>
                                   <td>Null</td>
                                        <?php } ?>
                                    <?php if(array_key_exists('judulUmum', $final)) {?>
                                          <td><?php echo $final['judulUmum']; ?></td>
                                    <?php } else { ?>
                                             <td>Tidak ada Judul Umumnya.</td>
                                    <?php } ?>
                                    <?php if(array_key_exists('namaPar', $final)) {?>
                                    <td><?php echo $final['namaPar']; ?></td>
                                        <?php } else { ?>
                                   <td>Null</td>
                                        <?php } ?>
                                    <?php if(array_key_exists('keterangan', $final)) {?>
                                      <td><?php echo $final['keterangan']; ?></td>
                                    <?php } else { ?>
                                      <td>Tidak ada Keterangan.</td>
                                    <?php } ?>
                                    <td>
                                      <form method="post" id="formKirimUlang" name ="formKirimUlang">
                                          <input type="hidden"  name="carRespon2" id="carRespon2" value="<?php echo $final['car']; ?>"> 
                                          <input type="hidden" name="jnsRespon2" id="jnsRespon2" value="<?php echo $final['jnsRespon']; ?>"> 
                                          <input type="hidden" name="seqRespon2" id="seqRespon2" value="<?php echo $final['seqRespon']; ?>"> 
                                         <!--  <?php //if(array_key_exists('flResponOtomatis', $final)){
                                            //if($final['flResponOtomatis'] == )
                                            }?> -->
                                        <input type="button" name="formPost" id="formPost" value="send" class="btn btn btn-warning">
                                      </form>
                                    </td>
                                  </tbody>
                                   <?php endforeach; endforeach; ?>
                                </table>
                            </div>
                      </div>
                  </div>
            <!-- /.col-lg-12 -->
          </div>
        </div>
      </div>
      <!--<div class="row">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         
          </div>
      </div>-->
       <?php }?>
    </div>

     <script type="text/javascript">
                $(document).ready(function() {
                 //our jquery code goes here
                 $("#formPost").click(function() {
                var car = $("#carRespon2").val();
                var jnsRes = $("#jnsRespon2").val();
                var seqRes = $("#seqRespon2").val();
                if (car == '' || jnsRes == '' || seqRes =='') {
                alert("Insertion Failed Some Fields are Blank....!!");
                } else {
                      // Returns successful data submission message when the entered information is stored in database.
                        $.post("wsdl2.php", {
                      carzz: car,
                       jnsRezz: jnsRes,
                      seqRezz: seqRes,
                       }, function(data) {
                      alert(data);
                // To reset form fields 
                //$('#form')[0].reset();
                    });
                  }
                });
            });
  </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="jquery-3.1.1.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7-dist/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap-3.3.7-dist/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7-dist/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
