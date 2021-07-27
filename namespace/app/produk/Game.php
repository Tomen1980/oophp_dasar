<?php

class Game extends Produk implements InfoProduk{
    public $durasi;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", 
    $harga = 0,$durasi= 0){
        parent::__construct($judul, $penulis,$penerbit,$harga);
        $this->durasi = $durasi;
    }
    
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : ".$this->getInfo()." - {$this->durasi} 
        Jam";
         return $str;
    }
}