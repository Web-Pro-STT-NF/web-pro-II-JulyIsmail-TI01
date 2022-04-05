<div class="row">
    <div class="col-12 bg-primary pt-3 ">
        <p class="text-light"> <b> SISTEM PENILAIAN </b></p>
    </div>
</div>

<div class="row">
    <div class="col-12 pt-2 ">
        <p> <b>FORM NILAI SISWA</b> </p>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-5">
                    <input id="nama" name="nama" placeholder="masukkan nama lengkap" type="text" class="form-control">
                </div>
            </div>


            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-5">
                    <select id="matkul" name="matkul" class="custom-select" aria-describedby="matkulHelpBlock">
                        <option value="Dasar - Dasar Pemrograman">Dasar - Dasar Pemrograman</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Basis Data">Basis Data</option>
                    </select>
                    <span id="matkulHelpBlock" class="form-text text-muted">silahkan pilih mata kuliah</span>
                </div>
            </div>
            <div class="form-group row">

                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-3">
                        <input id="nilai_uts" name="nilai_uts" placeholder="masukkan nilai uts" type="number" min="0"
                            max="100" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-3">
                        <input id="nilai_uas" name="nilai_uas" placeholder="masukkan nilai uas" type="number" min="0"
                            max="100" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                    <div class="col-3">
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="masukkan nilai tugas" min="0" max="100"
                            type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-3">
                        <button name="proses" type="submit" class="btn btn-primary"><b>KIRIM</b></button>
                    </div>
                </div>
        </form>

        <?php
                    include_once 'libfungsi.php';
                    $proses = isset($_POST['proses']) ? $_POST['proses'] : '-' ;
                    $nama = isset($_POST['nama']) ? $_POST['nama'] : '-' ;
                    $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '-' ;
                    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '-' ;
                    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '-' ;
                    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '-' ;

                    echo "<b>Nama Lengkap   : $nama";
                    echo "<br/>Mata Kuliah  : $mata_kuliah";
                    echo "<br/>Nilai UTS    : $nilai_uts";
                    echo "<br/>Nilai UAS    : $nilai_uas";
                    echo "<br/>Nilai Tugas  : $nilai_tugas";

                    $nilai_akhir = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
                    $grade_nilai = grade_nilai($nilai_akhir);
    
                    echo "<br/>Nilai Akhir : $nilai_akhir";
                    echo "<br/>Status : ", kelulusan($nilai_akhir);
                    echo "<br/>Grade Nilai : ", $grade_nilai;
                    echo "<br/>Predikat Nilai : ", predikat_nilai($grade_nilai);
                ?>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-12 bg-primary pt-3">
        <p class="text-light"> <b> Develop by July Ismail | STT-NF </b></p>
    </div>
</div>
</div>

</html>