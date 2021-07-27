<?php

class Produk{
    public $judul ,
           $penulis ,
           $penerbit ,
           $harga ;    
    
    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInformasiProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Mashasi Kashimoto","Shounen Jump",30000);

$produk2 = new Produk("Uncharter","Neil Druckmen","Sony Computer",400000);


echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
echo "<br>";
$cetak = new CetakInformasiProduk();
echo $cetak->cetak($produk1);