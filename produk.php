<?php
//class produk
class produk
{
    //Menambah Property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;
    //Membuat method tanpa constructor
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
    //Membuat method dengan constructor dan dapat memberikan nilai default dalam constructor contoh
    //public function __construct($judul = "judul") metode khusus yang akan dijalankan jika membuat sebuah instance penggunaan constructor akan lebih sering dipakai dalam penggunaan database
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

//Penggunaan object type dimana object yang sudah dibuat dipanggil kedalam class lain
class cetakInfo
{
    //penggunaan produk sebelum $produk dalam parameter digunakan agar system mengenal bahwa parameter yang boleh dipakai hanya berasal dari class produk
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

//instance dan memanggil property
$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000");

//Sebelum penggunaan constructor harus manual seperti dibawah
// $produk1->judul = "Naruto";
// $produk1->penulis = "Masashi Kishimoto";
// $produk1->penerbit = "Shonen Jump";
// $produk1->harga = "30000";


//instance dan memanggil property
$produk2 = new produk("Persona 5", "Katsura Hashino", "ATLUS", "700000");

//Sebelum penggunaan constructor harus manual seperti dibawah
// $produk2->judul = "Persona";
// $produk2->penulis = "Katsura Hashino";
// $produk2->penerbit = "ATLUS";
// $produk2->harga = "700000";

//pemanggilan method di dalam class
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game  : " . $produk2->getLabel();
echo "<br>";

$infoProduk = new cetakInfo();
echo $infoProduk->cetak($produk1);
echo $infoProduk->cetak($produk2);
