<?php
class NilaiMahasiswa {
    var $matakuliah;
    var $nilai;
    var $nim;

    function __construct($matakuliah, $nilai, $nim) {
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function grade($nilai){
        if ($nilai >= 0 && $nilai <= 35){
            return "E";
        }elseif ($nilai >= 36 && $nilai <= 55){
            return "D";
        }elseif ($nilai >= 56 && $nilai <= 69){
            return "C";
        }elseif ($nilai >= 70 && $nilai <= 84){
            return "B";
        }elseif ($nilai >= 85 && $nilai <= 100){
            return "A";
        }else{
            return "Input Tidak Valid.";
        }
    }

    function hasil($nilai){
        if ($nilai >= 0 && $nilai <= 35){
            return "Sangat Kurang";
        }elseif ($nilai >= 36 && $nilai <= 55){
            return "Kurang";
        }elseif ($nilai >= 56 && $nilai <= 69){
            return "Cukup";
        }elseif ($nilai >= 70 && $nilai <= 84){
            return "Baik";
        }elseif ($nilai >= 85 && $nilai <= 100){
            return "Sangat Memuaskan";
        }else{
            return "Input Tidak Valid.";
        }
    }
}
?>