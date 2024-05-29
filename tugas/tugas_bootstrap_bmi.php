<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body class="pt-4">
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">nama</label>
                <input class="form-control" type="text" name="nama" id="nama" placeholder="nama">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">berat badan</label>
                <input class="form-control" type="number" name="berat-badan" id="berat-badan" placeholder="berat-badan">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">tinggi badan</label>
                <input class="form-control" type="number" name="tinggi-badan" id="tinggi-badan" placeholder="tinggi-badan">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="hitung" value="hitung">
            </div>
        </form>
        <hr>
    </div>

    <?php


    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $beratBadan = $_POST['berat-badan'];
        $tinggiBadan = $_POST['tinggi-badan'];
        $bmi =  $beratBadan  / ($tinggiBadan * $tinggiBadan);


        if ($bmi >= 30.0) {
            $status = "obesitas";
        } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
            $status = "kegemukan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            $status = "normal";
        } elseif ($bmi < 18.5) {
            $status = "kurus";
        }
        # code...
    }

    ?>

    <div class="container">
        <div class="mb-3">
            <label for="" class="form-label">nama</label>
            <input readonly class="form-control" type="text" name="nama" id="nama" placeholder="" value="<?php print (isset($nama)) ? $nama : ""; ?>">
        </div>
    </div>
    <div class="container">
        <div class="mb-3">
            <label for="" class="form-label">nilai bmi anda adalah</label>
            <input readonly class="form-control" type="text" name="" id="" placeholder="" value="<?php print (isset($bmi)) ? $bmi : "" ?>">
        </div>
    </div>
    <div class="container">
        <div class="mb-3">
            <label for="" class="form-label">Status Bmi</label>
            <input readonly class="form-control" type="text" name="" id="" placeholder="" value="<?php print (isset($status)) ? $status : "" ?>">
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>


</html>