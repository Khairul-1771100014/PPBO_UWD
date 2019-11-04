<?php
class Mobil{
	var $warna;
	var $merk;
	
	function __construct()
	{
		$this->warna = "Biru";
		$this->merk = "BMW";
	}
	function gantiWarna ($warnaBaru)
	{
		$this->warna = $warnaBaru;
	}
	function tampilWarna()
	{
		echo "warna mobilnya : ".$this->warna;
	}
}
$a= new Mobil();
$b= new Mobil();
echo "<br> Mobil pertama</br>";
$a->tampilWarna();
echo "<br> Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna ();
?>