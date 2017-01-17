<?php


class Jahe
{
  public $nama;
  public $khasiat;
  public $astiri;

  function tampiljahe()
  {
    echo "Ini adalah ". $this->nama;
    echo "<br>";
    echo "kandungan minyak astirinya ". $this->astiri;
    echo "<br>";
    echo "Khasiatnya untuk ". $this->khasiat;

  }
}

$jahe = new Jahe();
$jahe->nama = "Jahe merah (Z. officinale Val. Rubrum)";
$jahe->astiri = "2,58-2,72 %";
$jahe->khasiat = "Menurunkan berat badan";

echo $jahe->tampiljahe();


?>
