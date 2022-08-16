<?php 
abstract class Produk
{
    //visibility & properties
    protected $judul, $penulis, $penerbit, $diskon = 0, $harga;
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

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    //method
    public function getClass()
    {
        //untuk mengambil variabel diluar function harus menggunakan $this->
        return "$this->penulis, $this->penerbit";
    }


    abstract public function getInfo();
}
