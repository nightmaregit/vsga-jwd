<?php
$daftarJenisKelamin = array("", "laki-laki", "perempuan");
$daftarJurusan = array("", "Teknologi informasi", "informatika", "Teknik komputer", "Teknik Sipil", "Sistem informasi");
$daftarMatakuliah = array("", "dasar dasar pemograman", "teknologi web", "pemograman web", "pemograman web berorientasi service", "keamanan web");
$daftarAgama = array("", "Agama Islam", "Agama Kristen", "Agama Katolik", "Agama Hindu", "Agama Buddha", "Agama Khonghucu");

$fileDataMahasiswa = "data/data_mahasiswa.json";
$isiDataMahasiswa = file_get_contents($fileDataMahasiswa);

$daftarMahasiswa = array();
$daftarMahasiswa = json_decode($isiDataMahasiswa, true);

if (isset($_POST['btn-submit'])) {
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $nama = $_POST['nama'];
    $noTelpn = $_POST['no-telpn'];
    $jenisKelamin = $_POST['jenis-kelamin'];
    $email = $_POST['e-mail'];
    $tempatLahir = $_POST['tempat-lahir'];
    $jurusan = $_POST['jurusan'];
    $tanggalLahir = $_POST['tanggal-lahir'];
    $mataKuliah = $_POST['mata-kuliah'];
    $agama = $_POST['agama'];
    $nilai = $_POST['nilai'];

    function nilaiHuruf($nilai)
    {
        if ($nilai <= 100 && $nilai >= 91) {
            return "A";
            # code...
        } elseif ($nilai <= 90 && $nilai >= 81) {
            return "B";
        } elseif ($nilai <= 80 && $nilai >= 71) {
            return "C";
        } elseif ($nilai <= 70 && $nilai >= 61) {
            return "D";
        } elseif ($nilai <= 60 && $nilai >= 0) {
            return "E";
        } else {
            return "";
        }
    };

    $nilaiHuruf = nilaiHuruf($nilai);

    function keterangan($nilai)
    {
        if ($nilai >= 71) {
            return "Lulus";
            # code...
        } elseif ($nilai <= 70 && $nilai >= 0) {
            return "Tidak Lulus";
        } else {
            return "";
        }
    };

    $keterangan = keterangan($nilai);

    $dataMahasiswa = array(
        "nim" => $nim,
        "nama" => $nama,
        "alamat" => $alamat,
        "noTelpn" => $noTelpn,
        "jenisKelamin" => $jenisKelamin,
        "email" => $email,
        "tempatLahir" => $tempatLahir,
        "jurusan" => $jurusan,
        "tanggalLahir" => $tanggalLahir,
        "mataKuliah" => $mataKuliah,
        "agama" => $agama,
        "nilai" => $nilai,
        "nh" => $nilaiHuruf,
        "ket" => $keterangan
    );

    array_push($daftarMahasiswa, $dataMahasiswa);

    $dataYangInginDitulisKefile = json_encode($daftarMahasiswa, JSON_PRETTY_PRINT);

    file_put_contents($fileDataMahasiswa, $dataYangInginDitulisKefile);

    # code...
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/UNIVERSITASTEKNOKRAT.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Tugas Akhir VSGA G5 -JWD C
            </a>
        </div>
    </nav>

    <div class="container-fluid p-3">
        <div class="row bg-primary">
            <div class="col text-center">
                <h3>Form Mahasiswa</h3>
            </div>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="nim" class="form-label">nim</label>
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="nim">
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="no-telpn" class="form-label">No Telpn</label>
                        <input type="text" class="form-control" name="no-telpn" id="no-telpn" placeholder="No telepon">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis-kelamin" id="jenis-kelamin" placeholder="Jenis Kelamin">
                            <?php
                            foreach ($daftarJenisKelamin as $jk) {
                                echo "<option value='$jk'>$jk</option>";
                                # code...
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="e-mail" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="e-mail" id="e-mail" placeholder="E-mail">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat-lahir" id="tempat-lahir" placeholder="Tempat Lahir">
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" name="jurusan" id="jurusan" placeholder="Jurusan">
                            <?php
                            foreach ($daftarJurusan as $dj) {
                                echo "<option value='$dj'>$dj</option>";
                                # code...
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal-lahir" id="tanggal-lahir" placeholder="tanggal-lahir">
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="mata-kuliah" class="form-label">Mata kulaih</label>
                        <select class="form-select" name="mata-kuliah" id="mata-kuliah" placeholder="Mata Kulaih">
                            <?php
                            foreach ($daftarMatakuliah as $dm) {
                                echo "<option value='$dm'>$dm</option>";
                                # code...
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select class="form-select" name="agama" id="agama" placeholder="Agama">
                            <?php
                            foreach ($daftarAgama as $am) {
                                echo "<option value='$am'>$am</option>";
                                # code...
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="pt-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="pt-3">
                        <input class="btn btn-primary" type="submit" name="btn-submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>

        <div class="row bg-primary mt-3 mb-3">
            <div class="col text-center">
                <h3>Daftar Mahasiswa</h3>
            </div>
        </div>

        <div>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>JENIS KELAMIN</th>
                        <th>JURUSAN</th>
                        <th>MATA KULIAH</th>
                        <th>NILAI</th>
                        <th>NH</th>
                        <th>KET</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($daftarMahasiswa as $mahasiswa) {

                        echo "<tr>";
                        echo "<td>" . $mahasiswa['nim'] . "</td>";
                        echo "<td>" . $mahasiswa['nama'] . "</td>";
                        echo "<td>" . $mahasiswa['jenisKelamin'] . "</td>";
                        echo "<td>" . $mahasiswa['jurusan'] . "</td>";
                        echo "<td>" . $mahasiswa['mataKuliah'] . "</td>";
                        echo "<td>" . $mahasiswa['nilai'] . "</td>";
                        echo "<td>" . $mahasiswa['nh'] . "</td>";
                        echo "<td>" . $mahasiswa['ket'] . "</td>";
                        echo "<tr>";

                        # code...
                    };
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>