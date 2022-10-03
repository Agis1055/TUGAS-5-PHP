<?php
require_once "abstractBentuk2D.php";
class PersegiPanjang extends Bentuk2D
{
    //var
    public $panjang;
    public $lebar;
    public $luas;
    public $keliling;

    public function  __construct($panjang, $lebar, $luas, $keliling){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang()
    {
        echo "<br/> Persegi Panjang";
    }
    public function luasBidang()
    {
        echo "<br/> Luas Persegi Panjang : ";
        $luas = $panjang * $lebar;
    }
    public function kelilingBidang()
    {
        echo "<br/> Luas Persegi Panjang : ";
        $keliling = ($panjang * 2) + ($lebar * 2);
    }
}