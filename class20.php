<?php

class Esjeruk
{
    public $bahan;
    public $harga;

    function tampiles()
    {
      echo "Es jeruk terbuat dari " . $this->bahan;
      echo "<br>";
      echo "harga es jeruk di angkringan adalah Rp.". $this->harga;

    }



}

$sjeruk = new Esjeruk();
$sjeruk->bahan = "Jeruk, air es, dan gula";
$sjeruk->harga = 3500;

echo $sjeruk->tampiles();

?>
