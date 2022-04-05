<?php
require_once "class_PersegiPanjang.php";
$PerPan1 = new PersegiPanjang(8, 3);
$PerPan2 = new PersegiPanjang(28, 8);

// Luas Persegi Panjang
echo "<br>Luas Persegi Panjang I adalah ". $PerPan1->getLuas();
echo "<br>Luas Persegi Panjang II adalah ". $PerPan2->getLuas();

// Keliling Persegi Panjang
echo "<br>Keliling Persegi Panjang I adalah ". $PerPan1->getKeliling();
echo "<br>Keliling Persegi Panjang I adalah ". $PerPan2->getKeliling();
?>