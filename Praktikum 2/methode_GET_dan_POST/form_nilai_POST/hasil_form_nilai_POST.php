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
                    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                    $nama = isset($_POST['namalengkap']) ? $_POST['namalengkap'] : '';
                    $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                    echo "<pre/>Nama Lengkap : $nama";
                    echo "<br/><pre/>Nilai UTS : $nilai_uts";
                    echo "<br/><pre/>Nilai UAS : $nilai_uas";
                    echo "<br/><pre/>Nilai Tugas : $nilai_tugas";                         
            ?>
        </td>
    </tr>

</table>

</body>
</html>