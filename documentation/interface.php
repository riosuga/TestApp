<?php 
include_once 'panggil.php';

class Mahasiswa{
	public function setNama($nama){
		$this->nama=$nama;
	}
	public function getNama(){
		return $this->nama;
	}
}

class Prodi extends Mahasiswa{
	public function setProdi($prodi){
		$this->prodi=$prodi;
	}
	public function getProdi(){
		return $this->prodi;
	}

}

class Belajar implements iTemplate{
	public function setHitung($a,$b){
		$hasil= $a +$b;
		return $hasil;
	}
	public function getHitung($hasil){
		 return $hasil;
	}
}

$test = new Belajar();
$print = $test->setHitung(4,3);
// echo $print."<br>";


$siswa = new Prodi();
$siswa->setNama("Fahmi");
$siswa->setProdi("Java");

$print1 = $siswa->getNama();
$print2 = $siswa->getProdi();

// echo "Nama saya adalah ".$print1." Prodi: ".$print2;