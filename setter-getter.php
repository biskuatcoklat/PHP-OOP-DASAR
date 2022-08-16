<?php


class Produk
{
    //visibility & properties
    private $judul, $penulis, $penerbit;
    protected $diskon = 0;
    private $harga;
    //protected $harga;

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

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        return $this->diskon;
    }


    //method
    public function getClass()
    {
        //untuk mengambil variabel diluar function harus menggunakan $this->
        return "$this->penulis, $this->penerbit";
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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




    // public function getHarga()
    // {
    //     return $this->harga;
    // }
    public function getInfoProduk()
    {
        $str = "Game " . parent::getInfoProduk() . "- {$this->waktumain} Jam";

        return $str;
    }
}

//object $produk1 dan mempunyai instant Produk dari class Produk
$produk1 = new Komik("Merdeka", "ika", "nagaswara", 2000, 100);
$produk2 = new Game("Gta", "endang", "sumut", 30000,  20);


echo $produk1->getInfoProduk();
echo PHP_EOL;
echo $produk2->getInfoProduk();
echo PHP_EOL;

$produk2->setDiskon(90);
echo $produk2->getHarga();

echo PHP_EOL;

echo $produk1->getJudul();
