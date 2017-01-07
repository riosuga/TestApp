<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- <link rel="icon" href="bootstrap-3.3.7-dist/../../favicon.ico"> -->

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7-dist/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7-dist/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.7-dist/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7-dist/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="jquery-3.1.1.min.js"></script>
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
<!-- side bar -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li><a href="#">Overview </a></li>
           <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pendaftaran
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a href="#">Pendaftaran xxxxx</a></li>
                    <li><a href="index4.php">Pendaftaran Impor</a></li>
                </ul>
           </li>
			      <li><a href="index3.php">Proses Impor</a></li>
            <li><a href="index2.php">Proses xxxxx</a></li>
          </ul>
        </div>
        <div class="row" style="padding-top: 25px;padding-left: 75px;padding-right: 75px;">
                  <div class="col-sm-9 col-sm-offset-3 col-md-4 col-md-offset-2 main well">
                      <div class="row">
                        <b><div class="col-lg-12 text-center">List Pendaftaran Inhouse xxxxx</div></b>
                        <br/>
                        <br/>
                <!-- /.col-lg-12 -->
                   </div>
                      <div>
                        <form method="post" action="#">
                                <div class="form-group">
                                   <label class="control-label col-sm-4" for="car">Edi Number:</label>
                                      <div class="col-sm-8">
                                           <input type="text" min="27" class="form-control" id="ediNumber1" name ="ediNumber1" placeholder="insert edi-Number here" required>
                                      </div>
                                  <div class="row placeholders" style="padding-top: 55px;">
                                      <input class="btn btn btn-primary" type="submit" value="cek">
                                  </div>
                                  <?php  
                                   if($_SERVER['REQUEST_METHOD']=='POST'){
                                    if(isset($_POST['ediNumber1'])){
                                       $url = "http://localhost:9090/skdsdksldks?wsdl";
                                       $client = new SoapClient($url);
                                       $hasilx = $client->cariPendaftaran(array('edinumber'=>$_POST['ediNumber1']));
                                       $hasilx = json_decode(json_encode($hasilx), true);
                                  ?>
                              <div class="row" style="padding-top: 25px;">
                                <!-- output list piloting here -->
                                <div class="col-lg-12">
                                    <div class="well text-center">
                                          <div class="table-responsive">
                                              <table class="table table-striped">
                                                <thead>
                                                  <tr>
                                                    <th>Id Piloting</th>
                                                    <th>Nama Perushaan</th>
                                                    <th>Kode Piloting</th>
                                                    <th>Kode Kantor</th>
                                                  </tr>
                                                </thead>
                                                <?php foreach($hasilx as $hasily):
                                                        foreach($hasily as $hasilz):
                                                 ?>
                                                <tbody>
                                                  <tr>
                                                  <?php var_dump($hasilz);?>
                                                    <td><?php echo $hasilz['id_piloting']; ?></td>
                                                    <?php if(array_key_exists('nama', $hasilz)) {?>
                                                      <td><?php echo $hasilz['nama']; ?></td>
                                                    <?php } else { ?>
                                                      <td>Tidak ada Nama Kantor.</td>
                                                    <?php } ?>
                                                    <td><?php echo $hasilz['kode_piloting']; ?></td>
                                                    <td><?php echo $hasilz['kd_kantor']; ?></td>
                                                  </tr>
                                                </tbody>
                                              <?php endforeach; endforeach; ?>
                                              </table>
                                          </div>
                                    </div>
                                  </div>
                               </div>
                               <?php 
                                  }
                               }
                               ?>
                                  <!-- <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-default" value="Submit">Submit</button>
                                  </div> -->
                                </div>
                          </form>
                    </div>
                  </div>
               <div class="col-sm-9 col-sm-offset-3 col-md-4 col-md-offset-2 main well">
                 <div class="row">
                        <b><div class="col-lg-12 text-center">Form Pendaftaran Inhouse xxxxx</div></b>
                        <br/>
                        <br/>
                <!-- /.col-lg-12 -->
                   </div>
                        <div>
                        <form method="post" action="#">
                                <div class="form-group">
                                   <label class="control-label col-sm-5" for="car" style="padding:5px;">NPWP Piloting:</label>
                                      <div class="col-sm-7"  style="padding:5px;">
                                           <input type="text" class="form-control" id="ediNumber2" name ="ediNumber2" placeholder="insert edi-Number here" required>
                                      </div>
                                     <label class="control-label col-sm-5" for="nmPerushaan" style="padding:5px;">Nama Perushaan:</label>
                                      <div class="col-sm-7"  style="padding:5px;">
                                           <input type="text" class="form-control" id="nmPerushaan" name ="nmPerushaan" placeholder="insert nama perushaan here" required>
                                      </div>
                                      <label class="control-label col-sm-5" for="kdPiloting" style="padding:5px;">Kode Piloting:</label>
                                       <div class="col-sm-7" style="padding:5px;">
                                           <input type="text" class="form-control" id="kdPiloting" name ="kdPiloting" placeholder="insert kode piloting here" required>
                                      </div>
                                       <label class="control-label col-sm-5" for="kdKantor" style="padding:5px;">Kode Kantor:</label>
                                      <div class="col-sm-7" style="padding:5px;">
                                           <input type="text" class="form-control" id="kdKantor" name ="kdKantor" placeholder="insert Kode Kantor here" required>
                                      </div>   
                                  <div class="row placeholders center">
                                      <input class="btn btn btn-warning" type="submit" value="Daftarkan" style="margin-top:15px;">
                                  </div>
                                 <!-- magic is here -->
                                 <?php if($_SERVER['REQUEST_METHOD']=='POST'){
                                     $url = "http://localhost:9090/skdsdksldks?wsdl";
                                     if(isset($_POST['ediNumber2']) && isset($_POST['nmPerushaan']) && isset($_POST['kdPiloting']) && isset($_POST['kdKantor'])){
                                      $ediNumber2 = $_POST['ediNumber2'];
                                      $nmPerushaan = $_POST['nmPerushaan'];
                                      $kdPiloting = $_POST['kdPiloting'];
                                      $kdKantor = $_POST['kdKantor'];

                                      $params = array('idPilot'=>$ediNumber2,'nama'=>$nmPerushaan,'kdPilot'=>$kdPiloting,'kdKantor'=>$kdKantor);
                                      $url = "http://localhost:9090/skdsdksldks?wsdl";
                                      $client  = new SoapClient($url);
                                      $hasil = $client->insertPendaftaranManualxxxxx($params);

                                      $hasil =  json_decode(json_encode($hasil),true);
                                      foreach ($hasil as $value) {
                
                                      ?>
                                     <b><div class="col-lg-12 text-center"><?php echo $value; ?></div></b>
                                         <?php 
                                       } 

                                     }
                                  }?>
                                </div>
                          </form>
                    </div>
              </div>
        </div>
      </div>
    </div>
    <!-- main content -->

 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7-dist/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap-3.3.7-dist/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7-dist/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>