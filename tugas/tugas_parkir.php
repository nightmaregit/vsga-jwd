<?php
    // buat tampilan sesuai dengan tugas
     function hitungTarif($a, $b) { 
        return $a*$b;
    }
?>

<html>

<form action="" method="get">
    No Polisi : <input type="text" name="noPolisi" > <br><br>
    lama parkir : <input type="text" name="lamaParkir" > <br><br>
    harga : <input type="text" name="harga" > <br><br>
    jumlah : <input type="submit" name="jumlah" value="Tarif parkir " > <br><br>
   
</form> 

 <?php

 if (isset($_GET['jumlah'])) {
    // mengambil data dari URL
    // panggil function hitungTarif
    $noPolisi = $_GET['noPolisi'];
    $lamaParkir = $_GET['lamaParkir'];
    $harga = $_GET['harga'];  
    $hasil = hitungTarif($lamaParkir, $harga);
    
    echo "tarif parkir kendaraan dengan nomor polisi $noPolisi = $hasil";
    # code...
 }

  

 ?>

</html>