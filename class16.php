<?php

class Telur
{
  public $nama;
  public $warna;
  public $rasa;

  function tampiltelur()
  {
    echo "Ini adalah telur ". $this->nama;
    echo "<br>";
    echo "warnanya ". $this->warna;
    echo "<br>";
    echo "rasanya ". $this->rasa;
  }
}

$telor = new Telur();
$telor->nama = "Asin";
$telor->rasa = "asin dan gurih";
$telor->warna = "biru";

echo $telor->tampiltelur();
?>
