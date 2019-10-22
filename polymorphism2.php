<?php
class kendaraan{
	private $merk;
	private $harga;
	
	function __construct($merk,$harga){
		$this->merk=$merk;
		$this->harga=$harga;
	}
	function BacaMerk(){
		return $this->merk;
	}
	function BacaHarga(){
		return $this->harga;
	}
}
$mobil= new kendaraan ("Honda",10000000);

echo "Merk Kendaraan = ".$mobil->BacaMerk()."<br>";
echo "Harga Mobil = ".$mobil->BacaHarga()."<br>";
echo "================================"."<br>";

$mobil2 = new kendaraan("Kol T",20000000);
echo "Merk Kendaraan = ".$mobil2->BacaMerk()."<br>";
echo "Harga Motor = ".$mobil2->BacaHarga()."<br>";
?>