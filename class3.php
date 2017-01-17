<?php
/**
 *
 */
class  Baju
{
   public $ukuran;
   public $jenis;

  function tampilBaju()
  {
    echo "Ini baju saya ukuran nya ". $this->ukuran ."jenis baju saya". $this->jenis;
  }
}

$baju = new Baju;
$baju->ukuran = "XL";
$baju->jenis  = "Lengan panjang";

echo $baju->tampilBaju();



?>
