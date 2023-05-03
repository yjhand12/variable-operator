<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perhitungan Penjualan</title>
</head>
<body>
    <?php
        $nama_barang = "Kaos Olahraga";
        $harga_beli = 30000;
        $harga_jual = 40000;
        $pajak = 0.1;
        $jumlah_barang = 5;
        $total_pembelian = 30000 * 5;
        $total_penjualan = 40000 * 5;
        $laba_kotor = $total_penjualan - $total_penjualan * $pajak;
        $laba_bersih = $laba_kotor - $total_pembelian;
        $space = "<br>";

        echo "Nama Barang       : ".$nama_barang .$space;
        echo "Total Pembelian   : ".$total_pembelian .$space;
        echo "Total Penjualan   : ".$total_penjualan .$space;
        echo "Laba Kontor       : ".$laba_kotor .$space;
        echo "Laba Bersih       : ".$laba_bersih .$space;
    ?>
</body>
</html>