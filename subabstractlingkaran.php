<?php
require_once "abstractBentuk2D.php";
class Lingkaran extends Bentuk2D
{
    //var
    public $jari;
    public $diameter;
    public $luas;
    public $keliling;

    //constructor
    public function  __construct($jari, $diameter){
        $this->jari = $jari;
        $this->jari = $diameter;
    }
    public function namaBidang()
    {
        echo "<br/> Lingkaran";
    }
    public function luasBidang()
    {
        echo "<br/> Luas Lingkaran : ";
        $luas = 3.14 * $jari * $jari;
    }
    public function kelilingBidang()
    {
        echo "<br/> Lingkaran";
        $keliling = $jari * 3.14;
    }
}