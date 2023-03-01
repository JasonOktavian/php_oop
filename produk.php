<?php
//class produk
class produk
{
    //Menambah Property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}

//instance dan memanggil property
$produk1 = new produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = "30000";


//instance dan memanggil property
$produk2 = new produk();
$produk2->judul = "Persona";
$produk2->penulis = "Katsura Hashino";
$produk2->penerbit = "ATLUS";
$produk2->harga = "700000";

//pemanggilan method di dalam class
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game  : " . $produk2->getLabel();
