<?php

use Produk as GlobalProduk;

class Produk
{
    //visibility & properties
    public $judul, $penulis, $penerbit, $harga, $jumlahhalaman, $waktumain, $tipe;
    /* constructor adalah method khusus yang akan dijalankan secara otomatis setiap kita akan membuat
     istants dari sebuah class
     */

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahhalaman = 0, $waktumain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahhalaman = $jumlahhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }

    //method
    public function getClass()
    {
        //untuk mengambil variabel diluar function harus menggunakan $this->
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getClass()} (Rp {$this->harga})";
        if ($this->tipe == "komik") {
            $str .= "-{$this->jumlahhalaman} Halaman";
        } elseif ($this->tipe == "game") {
            $str .= "-{$this->waktumain} Jam";
        }
        return $str;
    }
}

//object $produk1 dan mempunyai instant Produk dari class Produk
$produk1 = new Produk("Merdeka", "ika", "nagaswara", 2000, 100, 0, "komik");
$produk2 = new Produk("Gta", "endang", "sumut", 5000, 0, 20, "game");


echo $produk1->getInfoLengkap();
echo PHP_EOL;
echo $produk2->getInfoLengkap();
