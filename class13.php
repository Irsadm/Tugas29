<?php

class Pembeli
{
   public $namapembeli;
    public $asal;
    public $barangyangdibeli;

  function tampilPembeli()
  {
    echo "Selamat sore Pak ". $this->namapembeli;
    echo "<br>";
    echo "dari ". $this->asal;
    echo "<br>";
    echo "Terima Kasih sudah belanja ". $this->barangyangdibeli;
    echo "<br>";
    echo "di Toko Kami";
  }
}

$pembeli = new Pembeli();
$pembeli->namapembeli = "Marzuki";
$pembeli->asal = "Ciawitali";
$pembeli->barangyangdibeli = "Kopi dan gula ";

echo $pembeli->tampilPembeli();

?>
