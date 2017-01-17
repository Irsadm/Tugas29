<?php

/**
 *
 */
class Rumah
{
   public $tipe;
   public $tingkat;
   public $warna;

  function tampilData()
  {
    echo $this->tipe. $this->tingkat. $this->warna;

  }
}

$rumah = new Rumah;
$rumah->tipe = "54";
$rumah->tingkat ="dua";
$rumah->warna = "kuning";

echo $rumah->tampildata();

?>
