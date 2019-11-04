<?php
function hitungLuasPersegiPanjang($panjang, $lebar)
	{
		$luas = $panjang * $lebar;
		echo $luas;
	}
function hitungKelilingPersegiPanjang($panjang, $lebar)
	{
		$keliling = ($panjang*2) + ($lebar*2);
		echo $keliling;
	}
function hitungLuasSegitiga($alas, $tinggi)
	{
		$Luas = 1/2*$alas*$tinggi;
		echo $luass;
	}
$x=5;
$y=10;
$a=8;
$t=20;

echo "============================= <br>";
echo "Menghitung Persegi Panjang <br>";
echo "============================= <br>";
echo "Luas Persegi Panjang <br>";
echo "Panjang : $x <br>";
echo "Lebar : $y <br>";
echo "Luas : ";
hitungLuasPersegiPanjang($x,$y);
echo "<br> =============================<br>";
echo "Keliling Persegi Panjang <br>";
echo "Panjang : $x <br>";
echo "Lebar : $y <br>";
echo "Keliling : ";
hitungKelilingPersegiPanjang($x,$y);
echo "<br> =============================<br>";
echo "Menghitung Luas Segitiga <br>";
echo "============================= <br>";
echo "Alas : $a <br>";
echo "Tinggi : $t <br>";
echo "Luas : ";
hitungLuasPersegiPanjang($a,$t);
?>