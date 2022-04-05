<?php
require_once "class_Lingkaran.php";
echo "Nilai PHI " . Lingkaran::PHI;
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

// Luas Lingkaran
echo "<br>Luas Lingkaran I adalah " .$lingkaran1->getLuas();
echo "<br>Luas Lingkaran II adalah " .$lingkaran2->getLuas();

// Keliling Lingkaran
echo "<br>Keliling Lingkaran I adalah " .$lingkaran1->getKeliling();
echo "<br>Keliling Lingkaran II adalah " .$lingkaran2->getKeliling();
?>