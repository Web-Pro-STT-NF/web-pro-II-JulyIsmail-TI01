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
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Daftar Mahasiswa</title>
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

            <!-- atas tabel -->
            <div class="row">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <span><b>Show</b></span>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">10
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1</a></li>
                            <li><a class="dropdown-item" href="#">2</a></li>
                            <li><a class="dropdown-item" href="#">3</a></li>
                            <li><a class="dropdown-item" href="#">4</a></li>
                            <li><a class="dropdown-item" href="#">5</a></li>
                            <li><a class="dropdown-item" href="#">6</a></li>
                            <li><a class="dropdown-item" href="#">7</a></li>
                            <li><a class="dropdown-item" href="#">8</a></li>
                            <li><a class="dropdown-item" href="#">9</a></li>
                            <li><a class="dropdown-item" href="#">10</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <span><b>entries</b></span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <label for="" class=""><b>Search : </b></label>
                    <input type="text" class="ms-1">
                </div>
            </div>
            
            <!-- Tabel -->
            <div class="row">
                <?php
                require_once "class_Mahasiswa.php";

                $mhs1 = new Mahasiswa("02011", "Faiz Fikri", "TI", 2012, 3.8, "Cum Laude");
                $mhs2 = new Mahasiswa("020112", "Alissa Khairunnisa", "TI", 2012, 3.9, "Cum Laude");
                $mhs3 = new Mahasiswa("01011", "Rosalie Naurah", "SI", 2010, 3.46, "Memuaskan");
                $mhs4 = new Mahasiswa("01012", "Defghi Muhammad", "SI", 2010, 3.2, "Memuaskan");

                $array_nilai = [$mhs1, $mhs2, $mhs3, $mhs4]
                ?>

                <div class="container-fluid">
                    <table class="table text-center table-bordered table-light table-striped table-hover w-100 m-auto mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No<i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">NIM <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Nama <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Prodi <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Thn Angkatan <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">IPK <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Predikat <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Ubah <i class="bi bi-chevron-expand"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($array_nilai as $mhs) {
                                echo '<tr><td>' . $no . '</td>';
                                echo '<td>' . $mhs->nim . '</td>';
                                echo '<td>' . $mhs->nama . '</td>';
                                echo '<td>' . $mhs->prodi . '</td>';
                                echo '<td>' . $mhs->thn_angkatan . '</td>';
                                echo '<td>' . $mhs->ipk . '</td>';
                                echo '<td>' . $mhs->predikat_ipk() . '</td>';
                                echo '<td> <a><i class="bi bi-eye"></i> <i class="bi bi-pencil"></i></a></td>';
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bawah Tabel -->
            <div class="row mt-4">
                <div class="col-4">
                    <span>Showing 1 to 4 of 4 entries</span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row my-2 ">
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
</html>