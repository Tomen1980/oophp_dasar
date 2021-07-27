<?php

interface InfoProduk{
    public function getInfoProduk();

}

abstract class Produk{
    protected $judul ,
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

    abstract public function getInfo();
}

class Komik extends Produk implements InfoProduk{
    public $jmlHal;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", 
    $harga = 0,$jmlHal= 0){
        parent::__construct($judul, $penulis,$penerbit,$harga);
        $this->jmlHal = $jmlHal;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    public function getInfoProduk(){
        $str = "Komik : ".$this->getInfo()." - {$this->jmlHal} Halaman";
         return $str;
    }
}

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

class CetakInformasiProduk{
    public $daftarProduk = array();
    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }
    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new Komik("Naruto","Mashasi Kashimoto","Shounen Jump",30000,100);
$produk2 = new Game("Uncharter","Neil Druckmen","Sony Computer",400000,50);

$cetakProduk = new CetakInformasiProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
