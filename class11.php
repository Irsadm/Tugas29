<?php

class Segitiga
{

  public $tinggi;
  public $alas;

  function hitungLuas()
  {
    echo "Segitiga dengan tinggi ". $this->tinggi;
    echo "dan alas ". $this->alas;
    echo "<br>";
    echo "Luasnya adalah ". $this->tinggi*$this->alas*0.5;
  }
}

$segitiga = new Segitiga();
$segitiga->tinggi = 9;
$segitiga->alas = 12;

echo $segitiga->hitungLuas();

?>
