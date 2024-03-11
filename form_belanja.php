<?php

if(isset($_POST['proses'])) {
    $customer = $_POST["customer"];
    $produk = $_POST["produk"];
    $jumlah = $_POST["jumlah"];

$harga_Playstation = 1500000 ;
$harga_Televisi = 2500000;
$harga_AC = 3000000;

$totalHarga = 0;
if($produk == "Playstation") {
    $totalHarga = $harga_Playstation * $jumlah;
} elseif($produk == "Televisi") {
    $totalHarga = $harga_Televisi * $jumlah;
} elseif($produk == "AC") {
    $totalHarga = $harga_AC * $jumlah;
}

$totalHargaFormatted = "Rp. " . number_format($totalHarga, 0, ',', '.'); //Menambahkan format mata uang menjadi Rupiah

    echo "<h4>Terima kasih telah berbelanja!</h4>";
    echo "<p>NAMA CUSTOMER: $customer</p>";
    echo "<p>Produk Pilihan: $produk</p>";
    echo "<p>Jumlah Beli: $jumlah</p>";
    echo "<p>Total Belanja: $totalHargaFormatted<p>";

}
?>