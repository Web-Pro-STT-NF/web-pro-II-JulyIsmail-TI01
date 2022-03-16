<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                table {
                border-collapse: collapse;
                width: 40%;
                border: 3px solid #ddd;
                }

                th, td {
                text-align: left;
                padding: 16px;
                }
            </style>
    </head>
    <body>

<h2 align="center">Hasil Data</h2>
    <table align="center">
        <tr>
            <td>
                <?php
                    $proses = isset($_GET['proses']) ? $_GET['proses'] : '';
                    $nama = isset($_GET['namalengkap']) ? $_GET['namalengkap'] : '';
                    $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : '';
                    $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
                    $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
                    $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';

                    //Perhitungan Nilai UTS (Grade)

                    if($nilai_uts>=101){
                        $grade = "I";
                    }elseif($nilai_uts>=85){
                        $grade = "A";
                    }elseif($nilai_uts>=70){
                        $grade = "B";
                    }elseif($nilai_uts>=56){
                        $grade = " C";
                    }elseif($nilai_uts>=36){
                        $grade = "D";
                    }elseif($nilai_uts>=0){
                        $grade = " E";
                    }elseif($nilai_uts<=0){
                        $grade = " I"; 
                    }
            
                    //perhitungan Nilai UAS (Grade)

                    if($nilai_uas>=101){
                        $grade_2 = "I";
                    }elseif($nilai_uas>=85){
                        $grade_2 = "A";
                    }elseif($nilai_uas>=70){
                        $grade_2 = "B";
                    }elseif($nilai_uas>=56){
                        $grade_2 = " C";
                    }elseif($nilai_uas>=36){
                        $grade_2 = "D";
                    }elseif($nilai_uas>=0){
                        $grade_2 = " E";
                    }elseif($nilai_uas<=0){
                        $grade_2 = " I";
                    } 

                    //Perhitungan Nilai Tugas dan Praktikum (Grade)

                    if($nilai_tugas>=101){
                        $grade_3 = "I";
                    }elseif($nilai_tugas>=85){
                        $grade_3 = "A";
                    }elseif($nilai_tugas>=70){
                        $grade_3 = "B";
                    }elseif($nilai_tugas>=56){
                        $grade_3 = " C";
                    }elseif($nilai_tugas>=36){
                        $grade_3 = "D";
                    }elseif($nilai_tugas>=0){
                        $grade_3 = " E";
                    }elseif($nilai_tugas<=0){
                        $grade_3 = " I"; 
                    }

                    echo "Nama Lengkap : $nama";
                    echo "<br/><pre/>Mata Kuliah : $mata_kuliah";
                    echo "<br/><pre/>Nilai UTS : $grade";
                    echo "<br/><pre/>Nilai UAS : $grade_2";
                    echo "<br/><pre/>Nilai Tugas : $grade_3"; 
                ?>
          
            </td>
        </tr>

    </table>

    </body>
</html>