<?php 
class Komik extends Produk implements InfoProduk
{
    public $jumlahhalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahhalaman = 100)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahhalaman = $jumlahhalaman;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getClass()} (Rp .{$this->harga})";
        return $str;
    }
    public function getInfoProduk()
    {
        $str = "Komik :" . $this->getInfo() . " - {$this->jumlahhalaman} Halaman.";
        return $str;
    }
}
