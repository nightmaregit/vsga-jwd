<?php
$nama = $_POST['nama'];
$beratBadan = $_POST['berat-badan'];
$tinggiBadan = $_POST['tinggi-badan'];
$bmi =  $beratBadan  / ($tinggiBadan * $tinggiBadan);

if ($bmi >= 30.0) {
    echo  "$nama <br> nilai bmi anda adalah : $bmi <br> status BMI : obesitas";
} elseif ($bmi >= 25.0 && $bmi <= 29.9) {
    echo  "$nama <br> nilai bmi anda adalah : $bmi <br> status BMI : kegemukan";
} elseif ($bmi >= 18.5 && $bmi <= 24.9) {
    echo  "$nama <br> nilai bmi anda adalah : $bmi <br> status BMI : normal";
} elseif ($bmi < 18.5) {
    echo  "$nama <br> nilai bmi anda adalah : $bmi <br> status BMI : kurus";
}    # code...
