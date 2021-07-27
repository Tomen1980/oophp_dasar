<?php

class Produk{
    public $judul ,
           $penulis ,
           $penerbit ,
           $harga,
           $jmlHal,
           $durasi;    
    
    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", 
    $harga = 0, $jmlHal= 0,$durasi= 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHal = $jmlHal;
        $this->durasi = $durasi;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }   
    public function getInfoProduk(){
        
        $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHal} Halaman";
         return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->durasi} 
        Jam";
         return $str;
    }
}

class CetakInformasiProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto","Mashasi Kashimoto","Shounen Jump",30000,100,0);

$produk2 = new Game("Uncharter","Neil Druckmen","Sony Computer",400000,0,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();