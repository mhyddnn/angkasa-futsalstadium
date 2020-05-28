<?php
require 'functions.php';
$member_cetak = mysqli_query($konek,"SELECT * FROM tb_member ORDER BY id_member DESC LIMIT 1");
?>
<style>
@media print {
  .btnmenu {
    display: none;
  }
  .sidebar {
    display: none;
  }
}
</style>
<center><h6>Kartu Member</h6><b>Angkasa - Stadium</b></center>
<br><br>
<p>========================================================================================</p>
<br>
  <?php foreach( $member_cetak as $row) : ?>
    <b>NAMA: </b> <br> <?=$row['nama_member'];?> <br> <hr>
    <b>ALAMAT: </b> <br> <?=$row['alamat_member'];?> <br> <hr>
    <b>NO / WHATSAPP: </b> <br> <?=$row['no_hp'];?> <br> <hr>
    <b>STATUS: </b> <br> <?="MEMBER FUTSAL";?>
  <?php endforeach; ?>
<br><br>
<p>========================================================================================</p>
<br><br>
<center>~~~~~~~~~~~~~~~~~~~~ Angkasa Futsal Stadium ~~~~~~~~~~~~~~~~~~~~ </center>
<br><br><br>
<p>~~Hormat~~Kami~~</p>
<u>Pegawai Angkasa - Futsal Stadium</u>
<script>
window.print();
</script>