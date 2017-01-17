<?php


class Warung
{
  public $namawarung;
  public $namapemilik;
  public $barangyangdijual;

  function tampilwarung()
  {
    echo "Ini warung ". $this->namawarung;
    echo "<br>";
    echo "pemiliknya ". $this->namapemilik;
    echo "<br>";
    echo "di sini jualan ".  $this->barangyangdijual;

  }
}

$warung = new Warung();
$warung->namawarung = "Kopi ";
$warung->namapemilik = "Pak Somad";
$warung->barangyangdijual = "Kopi mantap";

echo $warung->tampilWarung();

?>
