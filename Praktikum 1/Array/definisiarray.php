<fieldset><legend><h1>Definisi Array</h1></legend>
<?php
    $ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];
    // cetak buah indek ke 2
    echo $ar_buah[2];
    // cetak jumlah buah
    echo '<br/>Jumlah Buah ada ' . count($ar_buah);
    // cetak seluruh buah
    echo'<ol>';
    foreach($ar_buah as $buah) {
            echo '<li>'. $buah . '</li>';
        }
        echo '</ol>';
        
        // tambahkan buah
        $ar_buah[]= "Durian";
        // hapus buah index ke 1
        unset ($ar_buah[1]);
        // ubah buah index ke 2 menjadi Manggis
        $ar_buah[2] = "Manggis";
        // cetak seluruh buah dengan indexnya
        echo '<ul>';
        foreach ($ar_buah as $k => $v) {
            echo '<li> buah index ke ' .$k . ' adalah '.$v.'</li>';
        }
        echo '<h3/><br/>keterangan :';
        echo '</br>index nya di hitung dari nol, contoh :';
        echo '</br><li> Pepaya [0]';
        echo '</br><li> Mangga [1]';
        echo '</br><li> Pisang [2]';
        echo '</br><li> Jambu [3]';
        echo '</br><li> buah Mangga dihapus dan letak nya di index ke 1';
        echo '</br><li> buah Pisang diganti menjadi Manggis dan letak nya di index ke 2';
        echo'</ul>';

?>
</fieldset>