<?php
// require_once "Produk/InfoProduk.php";
// require_once "Produk/Produk.php";
// require_once "Produk/komik.php";
// require_once "Produk/Game.php";
// require_once "Produk/cetakinfoproduk.php";
// require_once "Produk/user.php";
// require_once "service/user.php";

spl_autoload_register(function ($class) {
    //approduk\user = ["App],"produk,"user]
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/service/' . $class . '.php';
});
