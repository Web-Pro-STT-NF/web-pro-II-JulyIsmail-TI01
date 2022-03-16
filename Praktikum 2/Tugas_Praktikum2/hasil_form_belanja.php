<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form Belanja</title>
</head>
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
<body>
<h2 align="center">Hasil Data</h2>
<table align="center">
    <tr>
        <td>
            <?php
                $proses= isset ($_POST['proses']) ? $_POST['proses'] : '';
                $nama_pelanggan= isset ($_POST['nama']) ? $_POST['nama'] : '';
                $produk= isset ($_POST['produk']) ? $_POST['produk'] : '';
                $jumlah= isset ($_POST['jumlah']) ? $_POST['jumlah']: '';

                if ($produk== "TV"){
                    $_produk= 4200000;
                }elseif ($produk=="Kulkas"){
                        $_produk= 3100000;
                }elseif ($produk=="Mesin Cuci"){
                        $_produk= 3800000;
                }

                echo 'Nama Customer : '.ucwords ($nama_pelanggan);
                echo '<br/>Produk Pilihan : '. $produk;
                echo '<br/>Jumlah Beli : '. $jumlah;
                echo '<br/>Total Belanja : Rp. '. (int)$jumlah*(int)$_produk. ',-';
            ?>
        </td>
    </tr>
    
</body>
</html>