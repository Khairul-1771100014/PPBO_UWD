<?php
class Pemrogram{
	var $nama;
	function getName(){
		return $this -> nama;
	}
	function setName($nama){
		$this -> nama= $nama;
	}
	function Pemrogram($nama){
		$this -> setName($nama);
	}
}
function changeName ($Pemrogram, $nama){
	$Pemrogram -> setName($nama);
}
$prog = new Pemrogram ("Joko");
print $prog -> getName();
print "<p> Objek setelah diganti <br>";
changeName ($prog, "Andi");
print $prog -> getName();
?>