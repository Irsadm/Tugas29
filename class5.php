<?php


/**
 *
 */
class Kereta
{
  public $namakereta;
  public $kelas;

  function tampildata()
  {
    echo "Kereta ". $this->namakereta;
    echo " Kelas ". $this->kelas;
  }
}

$kereta = new Kereta;
$kereta->namakereta = "Argo Wilis";
$kereta->kelas = "Eksekutif";

echo $kereta->tampildata();

?>
