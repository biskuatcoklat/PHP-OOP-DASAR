<?php


class Produk
{
    //visibility & properties
    public $judul, $penulis, $penerbit, $harga;
    /* constructor adalah method khusus yang akan dijalankan secara otomatis setiap kita akan membuat
     istants dari sebuah class
     */

    //                Construct 
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) //value default construct
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
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getClass()} (Rp .{$this->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public $jumlahhalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahhalaman = 100)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahhalaman = $jumlahhalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik :" . parent::getInfoProduk() . " - {$this->jumlahhalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktumain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;
    }
    public function getInfoProduk()
    {
        $str = "Game {$this->judul} | {$this->getClass()} (Rp.{$this->harga}) - {$this->waktumain} Jam";
        return $str;
    }
}

//object $produk1 dan mempunyai instant Produk dari class Produk
$produk1 = new Komik("Merdeka", "ika", "nagaswara", 2000, 100);
$produk2 = new Game("Gta", "endang", "sumut", 5000,  20);


echo $produk1->getInfoProduk();
echo PHP_EOL;
echo $produk2->getInfoProduk();
