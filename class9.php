<?php

class Batu
{
  public $jenisbatu;
  public $warnabatu;

  function tampilbatu()
  {
    echo "Ini batu = ". $this->jenisbatu;
    echo "<br>";
    echo "Warnanya ". $this->warnabatu;
  }
}

$batu = new Batu();
$batu->jenisbatu = "Germstone";
$batu->warnabatu = "Merah";

echo $batu->tampilbatu();


?>
