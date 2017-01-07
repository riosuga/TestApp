<?php
  $kat = "aku sayang kamu";
  $kata = explode(" ", $kat);
  // var_dump($kata); 
  $rand_keys = array_rand($kata, 2);
  echo $kata[$rand_keys[0]] . "\n";


  $database ='172.0.00.2';
 ?>