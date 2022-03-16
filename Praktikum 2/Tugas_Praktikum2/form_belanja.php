<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Belanja Online</p>
            </div>
            
            <div class="container-fluid">
	        <div class="row">
		        <div class="col-md-8">
            <form method="POST" action="hasil_form_belanja.php">
                <br/>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Masukkan nama lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                        <div class="form-check form-check-inline">
                            <input name="produk" id="produk_0" type="radio" class="form-check-input" value="TV" aria-describedby="produkHelpBlock">TV
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="produk" id="produk_1" type="radio" class="form-check-input" value="Kulkas" aria-describedby="produkHelpBlock">Kulkas
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="produk" id="produk_2" type="radio" class="form-check-input" value="Mesin Cuci" aria-describedby="produkHelpBlock"> Mesin Cuci
                        </div> 
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-6">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
        </form>
		</div>
        <div class="col-md-4">
            <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
                    <div class="list-group-item">
                        TV : 4.200.000
                    </div>
                    <div class="list-group-item">
                       Kulkas : 3.100.000
                    </div>
                    <div class="list-group-item">
                       Mesin Cuci : 3.800.000
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Develop by Mahasiswa STT NF</p>
            </div>
        </div>
    </div>
</body>
</html>
