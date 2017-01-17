<?php

class NasiGoreng
{
  public $bahan;
  public $bumbu;
  public $rasa;

  function tampilNG()
  {
    echo "Ini adalah nasi goreng rasanya ". $this->rasa;
    echo "<br>";
    echo "nasi goreng ini dibuat dari ". $this->bahan;
    echo "<br>";
    echo "ditambah bumbu ". $this->bumbu;
  }
}

$nasgor = new NasiGoreng();
$nasgor->rasa = "gurih mantap";
$nasgor->bumbu = "saji*u";
$nasgor->bahan = "nasi";

echo $nasgor->tampilNG();

?>
