<?php

class Produk{
    public $judul ,
           $penulis ,
           $penerbit ,
           $harga,
           $jmlHal,
           $durasi,
           $type ;    
    
    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", 
    $harga = 0, $jmlHal= 0,$durasi= 0,$type){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHal = $jmlHal;
        $this->durasi = $durasi;
        $this->type = $type;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }   
    public function getInfoLengkap(){
        //komik : Naruto | Mashasi Kashimoto, Shonen Jump (Rp. 30000) - 100 HAL
        $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->type == "Komik"){
            $str .= " - {$this->jmlHal} Halaman";
        }else if($this->type == "Game"){
            $str .= " ~ {$this->durasi} jam";
        }
        return $str;
    }
}


class CetakInformasiProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Mashasi Kashimoto","Shounen Jump",30000,100,0,"Komik");

$produk2 = new Produk("Uncharter","Neil Druckmen","Sony Computer",400000,0,50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();