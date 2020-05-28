<?php
require 'functions.php';
$pembayaran = query("SELECT * FROM tb_sewa");
if(isset($_POST["btnCARI"])) {
  $pembayaran = cari($_POST["txtKeyword"]);
}
?>
<center>
<h2>DATA PEMBAYARAN</h2>
</center>
<br>
<form class="form-inline my-2 my-lg-0 row-reverse" method="post">
  <div class="form-group mx-sm-3 mb-2" >
    <input type="text" class="form-control" id="cari" name="txtKeyword" placeholder="Cari data pembayaran" autofocus autocomplete="off">
  </div>
  <button type="submit" name="btnCARI" class="btn bg-success text-white mb-2">Cari</button>
</form>
<table class="table table-hover">
  <thead>
    <tr>
    <th>NO</th>
    <th>NAMA TIM</th>
    <th>NAMA LAPANGAN</th>
    <th>TOTAL</th>
    <th>TANGGAL</th>
    <th>AKSI</th>
    </tr>
  </thead>
<tbody>
  <tr>
  <?php $i = 1; ?>
  <?php foreach( $pembayaran as $row) : ?>
    <td><?= $i; ?></td>
    <td><?=$row['nama_tim'];?></td>
    <td><?=$row['lapangan'];?></td>
    <td>RP. <?='number_format'($row['total_sewa']);?></td>
    <td><?=$row['tanggal_sewa'];?></td>
    <td>
    <a href="?halaman=pembayaran_cetak&id_sewa=<?=$row['id_sewa'];?>" class="btn btn-primary btn-sm">Cetak</a>
    <a href="?halaman=pembayaran_ubah&id_sewa=<?=$row['id_sewa'];?>" class="btn btn-warning btn-sm">Ubah</a>
    <a href="?halaman=pembayaran_hapus&id_sewa=<?=$row['id_sewa'];?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" class="btn btn-danger btn-sm">Hapus</a>
    </td>
  </tr>
  <?php $i++; ?>
  <?php endforeach; ?>
</tbody>
</table>