<?php

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Mobel Legend";
// $produk2->tambahProperti = "heihei";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashasi Kashimoto";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul="Uncharter";
$produk4->penulis="Neil Druckmen";
$produk4->penerbit="Sony Computer";
$produk4->harga=400000;

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();