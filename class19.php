<?php


class Ayam
{
  public $nama;
  public $jenis;
  public $harga;

  function tampilayam()
  {
    echo "Ini adalah ayam ". $this->nama;
    echo "<br>";
    echo "ayam ini termasuk jenis ". $this->jenis;
    echo "<br>";
    echo "harga per ekor ayam ini adalah Rp. ". $this->harga;

  }
}

$ayam = new Ayam();
$ayam->nama = "Kate Betindo";
$ayam->jenis = "Kate";
$ayam->harga = "80.000";

echo $ayam->tampilayam();

?>
