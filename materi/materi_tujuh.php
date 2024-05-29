<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_saya/style.css">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }

        #form-data {
            display: flex;
            align-self: center;
            justify-content: center;
        }

        tr:nth-child(even) {
            background-color: #dddd;
        }
    </style>
</head>

<body>
    <h1>selamat datang</h1>
    <h1 style="color: blue;">form data karyawan</h1>
    <form action="" method="post" id="form-data">
        <table>
            <tr>
                <td>nama karyawan</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>jenis kelamin</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>status</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>kendaraan</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="kendaraan" id="kendaraan" value="mobil">mobil <br>
                    <input type="checkbox" name="kendaraan" id="kendaraan" value="motor">motor <br>
                    <input type="checkbox" name="kendaraan" id="kendaraan" value="sepedah">sepedah <br>
                    <input type="checkbox" name="kendaraan" id="kendaraan" value="pesawat">pesawat <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="btnSimpan" id="btnSimpan" value="simpan"></td>
            </tr>
        </table>
    </form>


</body>

</html>