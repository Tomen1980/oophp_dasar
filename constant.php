<?php
//tdk bisa disimpan di dalam kelas
// define("NAMA","Agung Jumantoro Andrian");
// echo NAMA;

// echo "<br>";
//bis di lakukan dalam kelas dan bisa digunakan untuk oop
// const UMUR = 32;
// echo UMUR;


// class Coba{
//     const NAMA = "Agung";
// }

// echo Coba::NAMA;

echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
function coba(){
    return __FUNCTION__;
}
echo coba();
echo "<br>";
class Coba {
    public $nama = __CLASS__;
}
$obj = new Coba();
echo $obj->nama;
?>