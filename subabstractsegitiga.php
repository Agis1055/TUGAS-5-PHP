<?php
require_once "abstractBentuk2D.php";
class Segitiga extends Bentuk2D
{
    //var
    public $alas;
    public $tinggi;
    public $luas;
    public $keliling;
    public function  __construct($alas, $tinggi, $luas, $keliling){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang()
    {
        echo "<br/> Segitiga Sama Sisi";
    }
    public function luasBidang()
    {
        echo "<br/> Luas Segitiga Sama Sisi : ";
        $luas = 0.5 * $alas * $tinggi;
    }
    public function kelilingBidang()
    {
        echo "<br/> Keliling Segitiga Sama Sisi : ";
        $keliling = $alas * 3;
    }
}