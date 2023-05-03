<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Penjumlahan</title>
</head>
<body>
    <?php
        $angka_pertama = 198;
        $angka_kedua = 134;
        $angka_ketiga = 76;
        $text = "Hasil dari penjumlahan ketiga angka diatas = ";
        $space = "<br>";
        $jumlah = $angka_pertama + $angka_kedua + $angka_ketiga;

        echo "Angka pertama = 198".$space;
        echo "Angka kedua   = 134".$space;
        echo "Angka ketiga  = 76".$space;
        echo ($text . $jumlah);
    ?>
</body>
</html>