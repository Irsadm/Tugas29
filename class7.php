<?php

/**
 *
 */
class Kubus
{
  public $rusuk;
  public $sisi;

  function hitungLuasPermukaan()
  {
    echo "Luas permukaan sebuah kubus dengan rusuk ". $this->rusuk. " adalah ". $this->rusuk*$this->rusuk*6;
  }
}

$kubus = new Kubus;
$kubus->rusuk = 6;

echo $kubus->hitungLuaspermukaan();


?>
