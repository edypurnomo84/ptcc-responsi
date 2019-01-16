<?php
if($_GET["aksi"] && $_GET["nmr"]){
include_once("../library/koneksi.php");
$edit = mysql_query("select * from kas where kode='".$_GET["nmr"]."'");
$editDb = mysql_fetch_assoc($edit);
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
			mysql_query("update kas set keterangan='".$_POST["nama"]."',  tgl='".$_POST["tgl"]."', jumlah='".$_POST["usia"]."' where kode='".$_GET["nmr"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=kas_masuk'>";
			
	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit Kas Masuk</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
		
						<div class="form-group">
							<label class="control-label col-lg-4">Keterangan</label>
							<div class="col-lg-4">
								<input type="text" name="nama" value="<?php echo $editDb["keterangan"];?>" required class="form-control" />
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp1">Tanggal</label>
							<div class="col-lg-4">
								<input type="date" required name="tgl" value="<?php echo $editDb["tgl"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jumlah</label>
							<div class="col-lg-4">
								<input type="text" required name="usia" value="<?php echo $editDb["jumlah"];?>" class="form-control" />
							</div>
						</div>
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=kas_masuk" class="btn btn-warning">Batal</a>
						</div>

					</form>
	</div>
</div>
<?php } ?>