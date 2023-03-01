<?php
//class produk

use produk as GlobalProduk;

class produk
{
    //Menambah Property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0;


    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    //Membuat method tanpa constructor
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class komik extends produk
{
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class game extends produk
{
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

//Penggunaan object type dimana object yang sudah dibuat dipanggil kedalam class lain
class cetakInfo
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}



//instance dan memanggil property
$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000", "50", "0");


//instance dan memanggil property
$produk2 = new game("Persona 5", "Katsura Hashino", "ATLUS", "700000", "0", "45");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// echo $produk1->;
// echo $produk2->;
