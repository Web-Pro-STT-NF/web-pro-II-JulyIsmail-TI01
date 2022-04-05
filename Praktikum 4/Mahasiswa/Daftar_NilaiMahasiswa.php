<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Daftar Nilai Mahasiswa</title>
</head>
<body>
    <div class="content">
       <div class="container">
           
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">WEB02</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Review PHP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PHP 5 OOP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li>
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Submit</button>
                                </form>
                            </li>
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Login</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="row mt-3">
                <h3 class="mt-3">Form Nilai Ujian</h3>
                <hr>
            </div>

            <div class="row mt-3 justify-content-center">
                <div class="col-6 justify-content-center">
                    <form method="POST">
                        <div class="form-group row">
                            <label for="nim" class="col-4 col-form-label">NIM</label> 
                            <div class="col-8">
                            <input id="nim" name="nim" placeholder="Masukkan NIM " type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label">Pilih MK</label> 
                            <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                            <div class="col-8">
                            <input id="nilai" name="nilai" placeholder="Masukkan Nilai" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="proses" type="proses" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-5">
                <hr>
            </div>

            <div class="row">
                <?php
                require_once "class_NilaiMahasiswa.php";
                if (isset($_POST['proses'])) {
                    $proses = $_POST['proses'];
                    $nim = $_POST['nim'];
                    $mata_kuliah = $_POST['matkul'];
                    $nilai = $_POST['nilai'];
                    $nilai_mahasiswa = new NilaiMahasiswa($mata_kuliah, $nilai, $nim);
                    echo "NIM : " . $nilai_mahasiswa->nim;
                    echo "<br>Nama Mata Kuliah : " . $nilai_mahasiswa->matakuliah;
                    echo "<br>Nilai : " . $nilai_mahasiswa->nilai;

                    $hasil_ujian = $nilai_mahasiswa->grade($nilai);
                    echo "<br>Hasil Ujian : $hasil_ujian <br>";

                    $hasil_grade = $nilai_mahasiswa->hasil($nilai);
                    echo "Grade : $hasil_grade";
                }
                ?>
            </div>

            <!-- bagian bawah -->
            <div class="row my-3 mt-5">
                <hr>
            </div>           
            <div class="row">
                <div class="bawah">
                    <h6><b>Lab Pemrograman Web Lanjutan</b></h6>
                    <p>Dosen : Sirojul Munir S.Si, M.Kom 
                        <br>STT-NF - Kampus B
                    </p>
                </div>
            </div>



        </div>
    </div>    
</body>