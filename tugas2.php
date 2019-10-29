<?php
class Mobil{
	private $merk;
	private $warna;
	private $harga;
	private $negara;

	function __construct($merk,$warna,$harga,$negara)
	{	
		$this->merk=$merk;
		$this->warna=$warna;
		$this->harga=$harga;
		$this->negara=$negara;
	}
	function BacaMerk(){return $this->merk;}
	function BacaWarna(){return $this->warna;}
	function BacaHarga(){return $this->harga;}
	function BacaNegara() {return $this->negara;}
}
echo	"Daftar Mobil"."<br>";
echo	"==================================="."<br>";
$mobil = new Mobil ("Daihatsu","Merah",150000000,"Jepang");
echo	"Merk Kendaraan  = ".$mobil->BacaMerk()."<br>";
echo	"Warna Kendaraan = ".$mobil->BacaWarna()."<br>";
echo	"Harga Kendaraan = ".$mobil->BacaHarga()."<br>";
echo	"Asal Negara	 = ".$mobil->BacaNegara()."<br>";
echo	"==================================="."<br>";

$mobil2= new Mobil ("Mobil SMK","Merah Putih",100000000,"Indonesia");
echo	"Merk Kendaraan  = ".$mobil->BacaMerk()."<br>";
echo	"Warna Kendaraan = ".$mobil->BacaWarna()."<br>";
echo	"Harga Kendaraan = ".$mobil->BacaHarga()."<br>";
echo	"Asal Negara	 = ".$mobil->BacaNegara()."<br>";
echo	"==================================="."<br>";

$mobil3= new Mobil ("Toyota","Hijau Army",200000000,"Kanada");
echo	"Merk Kendaraan  = ".$mobil->BacaMerk()."<br>";
echo	"Warna Kendaraan = ".$mobil->BacaWarna()."<br>";
echo	"Harga Kendaraan = ".$mobil->BacaHarga()."<br>";
echo	"Asal Negara	 = ".$mobil->BacaNegara()."<br>";
echo	"==================================="."<br>";
?>