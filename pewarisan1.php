<?php
/*pewarisan.php*/
class bapak{
	var $nama="Bapak";
	function Bapak($n){
		$this->nama=$n;
	}
	function Hallo(){
		echo "===============CONTOH SINGLE INHERITANCE==============="."<br>";
		echo "Halo, saya Anita putri dari " .$this->nama."<br>";
		echo "Halo, saya Anfredo anak ke 2 dari " .$this->nama."<br>";
	}
}
class Anak extends Bapak{	
}
$test=new Anak("Bapak Joko");
$test->Hallo();
?>