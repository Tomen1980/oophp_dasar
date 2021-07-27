<?php

require_once("app/init.php");

// $produk1 = new Komik("Naruto","Mashasi Kashimoto","Shounen Jump",30000,100);
// $produk2 = new Game("Uncharter","Neil Druckmen","Sony Computer",400000,50);

// $cetakProduk = new CetakInformasiProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use app\service\User as serviceUser;
use app\produk\User as produkUser;
new serviceUser();
echo "<br>";
new produkUser();
