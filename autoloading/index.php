<?php
require_once "App/init.php";

//object $produk1 dan mempunyai instant Produk dari class Produk
$produk1 = new Komik("Merdeka", "ika", "nagaswara", 2000, 100);
$produk2 = new Game("Gta", "endang", "sumut", 30000,  20);

$cetakProduk =  new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->Cetak();
