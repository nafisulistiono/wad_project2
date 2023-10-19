<?php
//dua input area yang diisi
//input pertama berupa angka
//input kedua berupa dropdown
//1 button yang bernama hitung
$judul = "Selamat datang!";

?>

<html>
    <head>
        <h1><?php echo $judul; ?></h1> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <br>
    <body>
        <form action="latihan3.php" method="post">
         <label for="angka">Masukkan Angka!</label>
        <input type="number" name="angka" required>
         <br>
         <br>
        <label for="pilihan">Pilih angka!</label>
        <select name="pilihan">
        <option value="pilihan1">1</option>
        <option value="pilihan2">2</option>
        </select>
         <br>
         <br>
         <button type="submit" name="hitung">Tekan untuk hitung!</button>
        </form>
    </body>
    
</html>