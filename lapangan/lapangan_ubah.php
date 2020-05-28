<?php
require 'functions.php';

$id = $_GET['id'];

$lapangan = query("SELECT * FROM tb_lapangan WHERE id = $id")[0];

if(isset($_POST["btnUBAH"])) {
  if(ubah($_POST) > 0)
  {
    echo "<script>alert('Ubah Berhasil')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=lapangan_tampil'>";
  }else{
    echo "<script>alert('Ubah Gagal')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=lapangan_tampil'>";
  }
}

?>

<form action="" method="post" enctype="multipart/form-data">
  <center><h2>UBAH DATA LAPANGAN</h2></center>
  <input type="hidden" name="id" value="<?=$lapangan["id"];?>">
  <input type="hidden" name="txtFotoLapanganLama" value="<?=$lapangan["foto"];?>">
    <div class="form-group">
      <label for="txtFotoLapangan">Foto Lapangan :</label> <br>
      <center><img width="200px" class="mb-4" src="img/imgserver/<?=$lapangan["foto"];?>"></center>
      <input type="file" class="form-control" name="txtFotoLapangan" id="txtFotoLapangan">
    </div>
    <div class="form-group">
      <label for="txtNamaLapangan">Nama Lapangan :</label>
      <input type="text" class="form-control" value="<?=$lapangan["nama_lapangan"];?>" name="txtNamaLapangan" id="txtNamaLapangan" required="">
    </div>
    <div class="form-group">
      <label for="txtWaktu">Waktu :</label>
      <input type="number" class="form-control" value="<?=$lapangan["waktu"];?>" name="txtWaktu" id="txtWaktu" required="">
    </div> 
    <div class="form-group">
      <label for="txtHarga">Harga :</label>
      <input type="number" class="form-control" value="<?=$lapangan["harga"];?>" name="txtHarga" id="txtHarga" required="">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success btn-sm" name="btnUBAH">UBAH</button>
      <a href="?halaman=lapangan_tampil" class="btn btn-dark btn-sm">BATAL</a>
    </div>
</form>