<?php
require 'functions.php';
$id_sewa = $_GET["id_sewa"];
  if(hapus_sewa($id_sewa) > 0) {
    echo "<script>alert('Hapus Berhasil')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=pembayaran_tampil'>";
  }else{
    echo "<script>alert('Hapus Gagal')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=pembayaran_tampil'>";
  }
?>