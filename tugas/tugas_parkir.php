<?php
    // buat tampilan sesuai dengan tugas
     function hitungTarif($a, $b) { 
        return $a*$b;
    }
?>

<html>

<link rel="stylesheet" href="tugas_parkir.css">


<?php

if (isset($_GET['jumlah'])) {
   // mengambil data dari URL
   // panggil function hitungTarif
   $noPolisi = $_GET['noPolisi'];
   $lamaParkir = $_GET['lamaParkir'];
   $harga = $_GET['harga'];  
   $hasil = hitungTarif($lamaParkir, $harga);
   # code...
}

?>
<form action="" method="get">
<div class="wrapper">
      
      <div class="input-box">
        <input type="text" name="noPolisi" placeholder=" No polisi" />
      </div>
      
      <div class="input-box">
        <input type="text" name="lamaParkir" placeholder=" Lama parkir" />
      </div>
      
      <div class="input-box">
        <input type="text" name="harga" placeholder=" Tarif / jam" />
      </div>
      
      <div class="input-box">
        <input type="submit" name="jumlah" value="Hitung" />
      </div>
      
      <div class="input-box">
        <input type="text" name="" value="<?php print(isset($hasil)) ? $hasil : "Total" ; ?>" readonly/>
      </div>
      
    </div>
</form>

</html>