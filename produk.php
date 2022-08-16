<?php
class Produk
{
    //visibility & properties
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    //method
    public function getClass()
    {
        //untuk mengambil variabel diluar function harus menggunakan $this->
        return "$this->penulis, $this->penerbit";
    }
}
//object $produk1 dan mempunyai instant Produk dari class Produk
$produk1 = new Produk();
$produk1->judul = "3 Mounth to be Backend Engineer";
$produk1->penulis = "zaki";
$produk1->penerbit = "amikom";
$produk1->harga = 25000;

// echo "Judul Buku : $produk1->judul" . PHP_EOL;
// echo "Penulis : $produk1->penulis" . PHP_EOL;
// echo "pengarang: $produk1->penerbit" . PHP_EOL;
// echo "Harga Buku : $produk1->harga" . PHP_EOL;

$produk2 = new Produk();
$produk2->judul = "GTA";
$produk2->penulis = "Sakti";
$produk2->penerbit = "UGM";
$produk2->harga = 20000;

echo "Buku : $produk1->judul" . PHP_EOL;
echo "Penulis : $produk1->penulis" . PHP_EOL;
echo PHP_EOL;
echo "Game : " . $produk2->getClass();
echo PHP_EOL;
