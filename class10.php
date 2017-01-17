<?php

class Ember
{
  public $ukuran;
  public $warna;
  public $harga;

  function tampildata()
  {
    echo "Ini ember ". $this->ukuran;
    echo "<br>";
    echo "Warnanya ". $this->warna;
    echo "<br>";
    echo "Harganya Rp ". $this->harga;

  }
}

$ember = new Ember();
$ember->ukuran = "2 Liter";
$ember->warna = "Merah Jambu";
$ember->harga = "50000";

echo $ember->tampildata();
?>
