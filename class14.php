<?php

class Hewan
{
  public $namahewan;
  public $makanan;
  public $jenis;

  function tampilHewan()
  {
    echo "Ini adalah ". $this->namahewan;
    echo "<br>";
    echo "dia makan ". $this->makanan;
    echo "<br>";
    echo "hewan ini termasuk hewan ". $this->jenis;
  }
}

$hewan = new Hewan();
$hewan->namahewan = "Harimau";
$hewan->makanan = "Daging";
$hewan->jenis = "Karnivora";

echo $hewan->tampilHewan();

 ?>
