<?php

class Kelereng
{
  public $warna;
  public $motif;
  public $jenis;

  function tampilkelereng()
  {
    echo "Ini kelereng ". $this->jenis;
    echo "<br>";
    echo "motifnya ". $this->motif;
    echo "<br>";
    echo "warnanya ". $this->warna;
  }
}

$kelereng = new Kelereng();
$kelereng->warna ="Merah";
$kelereng->jenis = "umit";
$kelereng->motif = "polos";

echo $kelereng->tampilkelereng();

?>
