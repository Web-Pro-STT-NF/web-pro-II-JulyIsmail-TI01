<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-primary pt-3">
                <p><b> Sistem Penilaian</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Form Nilai Siswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12"></div>
                <form method= "POST" action ="hasil_form_nilai_POST.php">
                    <div class="form-group row">
                        <label for="namalengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div> 
                                <input id="namalengkap" name="namalengkap" placeholder="masukkan nama lengkap" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="ddp">Dasar-dasar pemograman</option>
                            <option value="bd">Basis Data</option>
                            <option value="pw">Pemograman Web</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                        <input id="nilai_uts" name="nilai_uts" placeholder="masukkan nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                        <input id="nilai_uas" name="nilai_uas" placeholder="masukkan nilai UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                        <div class="col-8">
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="masukkan nilai" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        <div class="row">
            <div class="col-12 bg-primary pt-3">
                <p>Develop by Mahasiswa STT NF</p>
            </div>
        </div>
    </div>
</body>
</html>
