<?php


/**
 *
 */
class Karyawan
{ public $nama_kar;
  public $nomor_ka;

  function tampil_data()
  {
    echo "Nama Karyawan = " .$this->nama_kar;
    echo '<br>';
    echo "Nomor Karyawan = " .$this->nomor_kar;
  }
}
  $karyawan = new Karyawan;
  $karyawan->nama_kar="Hasan";
  $karyawan->nomor_kar="123";

  echo $karyawan->tampil_data();


 ?>
