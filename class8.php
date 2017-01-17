<?php

/**
 *
 */
class Bunga
{
   public $kerajaan;
   public $divisi;
   public $kelas;
   public $ordo;
   public $famili;
   public $upafamili;
   public $genus;

  function tampilBunga()
  {
    echo "Kerajaan ". $this->kerajaan;
    echo "Divisi". $this->divisi;
    echo "Kelas". $this->kelas;
    echo "Ordo". $this->ordo;
    echo "Famili". $this->famili;
    echo "Upafamili ". $this->upafamili;
    echo "Genus". $this->genus;
  }
}

$bunga = new Bunga;
$bunga->kerajaan ="Plantae";
$bunga->divisi ="Magnoliophyta";
$bunga->kelas ="Magnoliopsida";
$bunga->ordo ="Rosales";
$bunga->famili ="Rosaceae";
$bunga->upafamili ="Rosoideae";
$bunga->genus ="Rosa L";

echo $bunga->tampilBunga();



?>
