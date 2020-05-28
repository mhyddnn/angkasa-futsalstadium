<?php
require 'functions.php';
$lapangan = query("SELECT * FROM tb_lapangan");
?>
<center>
<h2>DATA LAPANGAN</h2>
<a href="?halaman=lapangan_tambah" class="btn btn-primary btn-sm">Tambah Data</a>
</center>
<br>
<table class="table table-hover">
  <thead>
    <tr>
    <th>NO</th>
    <th>FOTO</th>
    <th>NAMA LAPANGAN</th>
    <th>WAKTU / JAM</th>
    <th>HARGA</th>
    <th>AKSI</th>
    </tr>
  </thead>
<tbody>
  <tr>
  <?php $i = 1; ?>
  <?php foreach( $lapangan as $row) : ?>
    <td><?= $i; ?></td>
    <td><img src="img/imgserver/<?=$row['foto'];?>"width="100px"></td>
    <td><?=$row['nama_lapangan'];?></td>
    <td><?=$row['waktu'];?></td>
    <td>RP. <?='number_format'($row['harga']);?></td>
    <td>
    <a href="?halaman=lapangan_ubah&id=<?=$row['id'];?>" class="btn btn-warning btn-sm">Ubah</a>
    <a href="?halaman=lapangan_hapus&id=<?=$row['id'];?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" class="btn btn-danger btn-sm">Hapus</a>
    </td>
  </tr>
  <?php $i++; ?>
  <?php endforeach; ?>
</tbody>
</table>