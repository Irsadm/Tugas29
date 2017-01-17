<?php

/**
 *
 */
class BarangMasuk
{
  public $namabarang;
  public $kuantitas;
  public $hargabarang;

  public function jumlahBarang()
  {
    echo $this->namabarang;
    echo "&nbsp; ada &nbsp;". $this->kuantitas;
  }
}

$barangMasuk = new BarangMasuk;
$barangMasuk->namabarang = "Sabun Cuci";
$barangMasuk->kuantitas = 10;

echo $barangMasuk->jumlahBarang();



?>
