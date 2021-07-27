<?php

class Produk{
    private $judul ,
           $penulis ,
           $penerbit,
           $harga,
           $diskon = 0; 
    
    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", 
    $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }   

    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception("Judul Harus String");
            
        }
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }
    
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }
  
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public $jmlHal;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", 
    $harga = 0,$jmlHal= 0){
        parent::__construct($judul, $penulis,$penerbit,$harga);
        $this->jmlHal = $jmlHal;
    }

    public function getInfoProduk(){
        $str = "Komik : ".parent::getInfoProduk()." - {$this->jmlHal} Halaman";
         return $str;
    }
}

class Game extends Produk{
    public $durasi;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", 
    $harga = 0,$durasi= 0){
        parent::__construct($judul, $penulis,$penerbit,$harga);
        $this->durasi = $durasi;
    }
    
    

    public function getInfoProduk(){
        $str = "Game : ".parent::getInfoProduk()." - {$this->durasi} 
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

$produk1 = new Komik("Naruto","Mashasi Kashimoto","Shounen Jump",30000,100);

$produk2 = new Game("Uncharter","Neil Druckmen","Sony Computer",400000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
echo $produk1->getPenulis();
