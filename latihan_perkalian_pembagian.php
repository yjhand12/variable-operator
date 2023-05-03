<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perkalian Pembagian</title>
</head>
<body>
    <?php
        $angka_pertama = 200;
        $angka_kedua = 15;
        $angka_ketiga = 10;
        $jumlah = $angka_pertama * $angka_kedua / $angka_ketiga;
        $text = "Hasil dari perhitungan ".$angka_pertama. " * ".$angka_kedua. " / ".$angka_ketiga. " adalah ";
        $space = "<br>";
        
        echo "Angka pertama = ".$angka_pertama .$space;
        echo "Angka kedua = ".$angka_kedua .$space;
        echo "Angka ketiga = ".$angka_ketiga .$space;
        echo $text .$jumlah;
    ?>
</body>
</html>