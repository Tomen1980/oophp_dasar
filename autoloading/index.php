<?php

require_once("app/init.php");

$produk1 = new Komik("Naruto","Mashasi Kashimoto","Shounen Jump",30000,100);
$produk2 = new Game("Uncharter","Neil Druckmen","Sony Computer",400000,50);

$cetakProduk = new CetakInformasiProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";
new Coba();