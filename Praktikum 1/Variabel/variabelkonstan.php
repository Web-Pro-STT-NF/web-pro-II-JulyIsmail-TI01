<fieldset><legend><h1> Variabel konstant </h1></legend>
<?php
// membuat variabel konstant
define ('PHI',3.14);
define ('DBNAME', 'Ira'); 
define ('DBSERVER', 'Localhost');

$jari = 8;
$luas = PHI * $jari *$jari;
$kll = 2 * PHI *$jari;

echo 'Luas Lingkaran dengan Jari'. $jari.' : '.$luas;
echo '<br/>Kelilingnya : '.$kll;
?>

<hr/>
<?php
echo 'Nama Databasenya : '.DBNAME;
echo  '<br/>Lokasi Databasenya ada di '.DBSERVER;



?>
</fieldset>
