<?php
$daftarJenisKelamin = array("laki-laki", "perempuan");
$daftarGolongan = array("I", "II");

$fileDataKaraywan = "data/data_karyawan.json";
$isiDataKaryawan = file_get_contents($fileDataKaraywan);

$daftarKaryawan = array();
$daftarKaryawan = json_decode($isiDataKaryawan, true);

if (isset($_POST['btn-simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama-karyawan'];
    $jenisKelamin = $_POST['jenis-kelamin'];
    $golongan = $_POST['golongan'];

    function hitung_gaji($golongan)
    {
        if ($golongan == "I") {
            return 1000000;
            # code...
        } else {
            return 500000;
        }
    }

    $gaji = hitung_gaji($golongan);

    $dataKaryawan = array(
        "nik" => $nik,
        "nama" => $nama,
        "jenisKelamin" => $jenisKelamin,
        "golongan" => $golongan,
        "gaji" => $gaji,
    );
    # code...

    array_push($daftarKaryawan, $dataKaryawan);

    $dataYangInginDitulisKefile = json_encode($daftarKaryawan, JSON_PRETTY_PRINT);

    file_put_contents($fileDataKaraywan, $dataYangInginDitulisKefile);
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- memanggil css bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <!-- navbar -->
    <!-- /navbar -->
    <!-- content -->
    <div class="container pt-5">
        <h3>aplikasi data karyawan</h3>
        <hr>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nik" class="form-label">nik</label>
                <input type="text" name="nik" id="nik" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nama-karyawan" class="form-label">nama-karayawan</label>
                <input type="text" name="nama-karyawan" id="nama-karyawan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jenis-kelamin" class="form-label">jenis-kelamin</label>
                <select class="form-select" name="jenis-kelamin" id="jenis-kelamin">
                    <?php
                    for ($jk = 0; $jk < count($daftarJenisKelamin); $jk++) {
                        echo "<option value='$daftarJenisKelamin[$jk]'>$daftarJenisKelamin[$jk]</option>";
                        # code...
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="golongan" class="form-label">golongan</label>
                <select class="form-select" name="golongan" id="golongan">
                    <?php
                    foreach ($daftarGolongan as $gol) {
                        echo "<option value='$gol'>$gol</option>";
                        # code...
                    }
                    ?>
                </select>
            </div>
            <div class="mb3">
                <button type="submit" name="btn-simpan"> Simpan</button>
            </div>
        </form>
        <hr>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Karyawan</th>
                    <th>Jenis kelamin</th>
                    <th>golongan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($daftarKaryawan as $karyawan) {

                    echo "<tr>";
                    echo "<td>" . $karyawan['nik'] . "</td>";
                    echo "<td>" . $karyawan['nama'] . "</td>";
                    echo "<td>" . $karyawan['jenisKelamin'] . "</td>";
                    echo "<td>" . $karyawan['golongan'] . "</td>";
                    echo "<td>" . $karyawan['gaji'] . "</td>";
                    echo "<tr>";

                    # code...
                };
                ?>
            </tbody>
        </table>
    </div>
    <!-- /content -->
    <!-- memanggil js bootstrap -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>