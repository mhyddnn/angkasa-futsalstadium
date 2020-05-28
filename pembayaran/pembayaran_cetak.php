<?php
require 'functions.php';
$id_sewa = $_GET['id_sewa'];
$pembayaran = mysqli_query($konek,"SELECT * FROM tb_sewa WHERE id_sewa='$id_sewa'");
?>
<style>
@media print {
  .btnmenu {
    display: none;
  }
  .sidebar {
    display: none;
  }
  .no {
    display: none;
  }
}
</style>
<table class="table table-hover">
  <thead>
    <tr>
    <th>NAMA TIM</th>
    <th>NAMA LAPANGAN</th>
    <th>TANGGAL</th>
    </tr>
  </thead>
<tbody>
  <tr>
  <?php $i = 1; ?>
  <?php foreach( $pembayaran as $row) : ?>
    <td class="no"><?= $i; ?></td>
    <td><?=$row['nama_tim'];?></td>
    <td><?=$row['lapangan'];?></td>
    <td><?=$row['tanggal_sewa'];?></td>
  </tr>
  <?php $i++; ?>
  <?php endforeach; ?>
</tbody>
</table>
<center>-------------------- LUNAS ------------------- </center>
<center>-------------------- Angkasa Futsal Stadium ------------------- </center>
<center>-------------------- Terima Kasih ------------------- </center>
<br><br><br>
<u>Pegawai Angkasa - Futsal Stadium</u>
<br>
<small class="tanggal">dicetak pada tanggal <?=date("d M Y");?></small>
<script>
window.print();
</script>