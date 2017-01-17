<?php

/**
 *
 */
class PersegiPanjang
{
  public $panjang;
  public $lebar;

  function hitungLuas()
  {
    echo "Persegi panjang dengan panjang = ".$this->panjang. "dan lebar = " .$this->lebar.
    "maka luas persegi panjang adalah ". $this->panjang*$this->lebar;
  }
}

$persegipanjang = new PersegiPanjang;
$persegipanjang->panjang = 9;
$persegipanjang->lebar = 2;

echo $persegipanjang->hitungLuas();


?>
