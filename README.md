# vsga-jwd-tegar karangga

## _repository pelatihan vsga jwd_

aplikasi ini merupakan untuk menginputkan data mahasiswa lalu data yang di inputkan akan ditampilkan pada tabel daftar mahasiswa menjadi informasi dari mahasiswa tersebut, yang menampilkan nim, nama, jenis kelamin, jurusan, matakuliah, nilai, NH(nilai huruf) dan ket(keterangan).

### logic NH(nilai huruf)

```php
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
```

### logic ket(keterangan)

```php
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
```
