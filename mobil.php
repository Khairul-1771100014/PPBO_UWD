<?php
//membuat class mobil
class mobil{
//membuat properti
	private $merk;
	private $harga;
	private $warna;
	private $type;

//membuat method konstruktor, dimana mengambil parameter merk,harga,warna dan type dari class mobil
function __construct($merk,$harga,$warna,$type){
	$this->merk=$merk;
	$this->harga=$harga;
	$this->warna=$warna;
	$this->type=$type;
	}

//fungsi getter
//membuat method bacamerk
function BacaMerk(){
return $this->merk;
}

//membuat method bacaharga
function BacaHarga(){
return $this->harga;
}

//membuat method bacawarna
function BacaWarna(){
return $this->warna;
}

//membuat method bacatype
function BacaType(){
return $this->type;
}

function __destruct(){
//echo "Merk,Harga,Warna dan Type telah dihapus";
}
}
//membuat objec mobil dari kelas mobil, yang berisi nilai dari parameter konstruktor
$mobil= new mobil("Daihatsu",600000000,"Merah","Bensin");
//perintah untuk menampilkan pada browser dimana mengambil dari method BacaMerk dan BacaHarga
	echo "Merk mobil = ".$mobil->BacaMerk()."<br>";
	echo "Harga mobil = ".$mobil->BacaHarga()."<br>";
	echo "Warna mobil = ".$mobil->BacaWarna()."<br>";
	echo "Type mobil = ".$mobil->BacaType()."<br>";
?>
