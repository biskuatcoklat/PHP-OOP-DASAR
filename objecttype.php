<?php

use Produk as GlobalProduk;

class Produk
{
    //visibility & properties
    public $judul, $penulis, $penerbit, $harga;

    /* constructor adalah method khusus yang akan dijalankan secara otomatis setiap kita akan membuat
     istants dari sebuah class
     */
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //method
    public function getClass()
    {
        //untuk mengambil variabel diluar function harus menggunakan $this->
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

class CetakInfoProduk
{
    public function Cetak(Produk $produk)
    {
        $str = "Judul: {$produk->judul}, Penulis :{$produk->penulis}, Penerbit: {$produk->penerbit}, Harga : {$produk->harga}";
        return $str;
    }
}
//object $produk1 dan mempunyai instant Produk dari class Produk
$produk1 = new Produk("jepun", "ika", "nagaswara", 2000);
$produk2 = new Produk("Toba", "endang", "sumut", 5000);


echo "Buku : $produk1->judul" . PHP_EOL;
echo "Penulis : $produk1->penulis" . PHP_EOL;
echo PHP_EOL;
echo "Game : " . $produk2->getClass();
echo PHP_EOL;

$infoproduk = new CetakInfoProduk();
echo $infoproduk->Cetak($produk1);
