<?php
// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Halo " . self::$angka++ . " Kali";
//     }
// }

// echo ContohStatic::$angka . PHP_EOL;
// echo ContohStatic::halo() . PHP_EOL;
// echo ContohStatic::halo() . PHP_EOL;

class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "halo " . self::$angka++ . " kali" . PHP_EOL;
    }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo PHP_EOL;
$obj2 = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
