<?php
$daftarJenisKelamin = array("laki-laki", "perempuan");
$daftarGolongan = array("I", "II");

$fileDataKaraywan = "data/data_karyawan.json";
$isiDataKaryawan = file_get_contents($fileDataKaraywan);

$daftarKaryawan = array();
$daftarKaryawan = json_decode($isiDataKaryawan, true)
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
        <form action="" method="post">
            <div class="mb-3">
                <label for="nik" class="form-label">nik</label>
                <input type="text" name="nik" id="nik" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nama-karayawan" class="form-label">nama-karayawan</label>
                <input type="text" name="nama-karayawan" id="nama-karayawan" class="form-control">
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
                <button type="button"></button>
            </div>

        </form>
    </div>
    <!-- /content -->
    <!-- memanggil js bootstrap -->
    <script src="js/bootstrap.min.js">
        s
    </script>
</body>

</html>