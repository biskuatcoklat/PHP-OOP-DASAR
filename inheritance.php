<?php


class Produk
{
    //visibility & properties
    public $judul, $penulis, $penerbit, $harga, $jumlahhalaman, $waktumain;
    /* constructor adalah method khusus yang akan dijalankan secara otomatis setiap kita akan membuat
     istants dari sebuah class
     */

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahhalaman = 0, $waktumain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahhalaman = $jumlahhalaman;
        $this->waktumain = $waktumain;
    }

    //method
    public function getClass()
    {
        //untuk mengambil variabel diluar function harus menggunakan $this->
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
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

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik {$this->judul} | {$this->getClass()} (Rp.{$this->harga}) - {$this->jumlahhalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game {$this->judul} | {$this->getClass()} (Rp.{$this->harga}) - {$this->waktumain} Jam";
        return $str;
    }
}

//object $produk1 dan mempunyai instant Produk dari class Produk
$produk1 = new Komik("Merdeka", "ika", "nagaswara", 2000, 100, 0);
$produk2 = new Game("Gta", "endang", "sumut", 5000, 0, 20);


echo $produk1->getInfoProduk();
echo PHP_EOL;
echo $produk2->getInfoProduk();
