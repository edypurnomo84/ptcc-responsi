<body onLoad="javascript:print()">   

<?php 
include "../library/koneksi.php";
include "fungsi.php";
include_once("tglindo.php");
?>

<?php
$tgl=date('Y-m-d');
$tanggal1=$_POST['tanggal1'];
$tanggal2=$_POST['tanggal2'];
$sql_in=mysql_query("select * from kas where tgl >= '$_POST[tanggal1]' and tgl <= '$_POST[tanggal2]' and jenis='Masuk' order by kode asc") or die
(mysql_error());
$sql_out=mysql_query("select * from kas where tgl >= '$_POST[tanggal1]' and tgl <= '$_POST[tanggal2]' and jenis='Keluar' order by kode asc") or die
(mysql_error());
?>
 

<h3 align="center" class="style1">Laporan Rekapitulasi Kas </h3>

<div align="center">DARI TANGGAL  <?php echo TanggalIndo($_POST['tanggal1']);?> SAMPAI DENGAN TANGGAL  <?php echo TanggalIndo($_POST['tanggal2']);?> </div>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#33CCFF">
<tr>
<td width="7%" align="center" valign="middle" bgcolor="#71DCFF"><strong>No Kwitansi</strong></td>
<td width="29%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Keterangan </strong></td>
<td width="14%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Tanggal </strong></td>
<td width="12%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Jenis </strong></td>
<td width="18%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Masuk </strong></td>
<td width="16%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Keluar </strong></td>
</tr>

<?/*
while($cetakdata=mysql_fetch_array($sql_in)){
$total_masuk=$cetakdata[jumlah];
$hitung+=$total_masuk;
$total_keluar=$cetakdata[keluar];
$hitung1+=$total_keluar;
$keseluruhan=$hitung-$hitung1;
*/?>

                                    <tbody>
										<?php
										$no1=1;
										$total=0;
										while($data=mysql_fetch_array($sql_out)){
										$total_masuk=$data['jumlah'];
										$hitung+=$total_masuk;
										$total_keluar=$data['keluar'];
										$hitung1+=$total_keluar;
										$keseluruhan=$hitung-$hitung1;
										?>	
			   
										<tr>
											<td align='center'><?php echo $no1; ?></td>
											<td align='center'><?php echo $data['kode']; ?></td>							
											<td align='center'><?php echo TanggalIndo($data['tgl']);?></td>
											<td><?php echo $data['keterangan']; ?></td>
											<td align='right'><?php echo  "Rp.".number_format($data['jumlah']).",-" ?></td>
											 
											
										</tr>
										<?php
											$no1++;
											$total=$total+$data['jumlah'];
										}
										?>
										
                                    </tbody>








<? } ?>
<tr>
<td colspan="4" align="left" valign="middle" bgcolor="#71DCFF"><div align="left"><strong>Total Kas Masuk</strong></div>
  <div align="center"><strong></strong></div>  <div align="center"><strong></strong></div>  <div align="center"><strong> </strong></div>  <div align="center"><strong> </strong></div></td>
<td align="right" valign="middle" bgcolor="#71DCFF"><strong><?php echo  "Rp.".number_format($total).",-" ?></strong></td>
</tr>
<tr>
<td colspan="5" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Kas Keluar   </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format($hitung1);?>,-  </strong></td>
</tr>

<tr>
<td colspan="4" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Saldo Kas </strong></div></td>
  <td bgcolor="#71DCFF">Total Kas Masuk - Total Kas Keluar</td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format($keseluruhan);?>,-  </strong></td>
</tr>
</table>


							  <div class="col-lg-12 col-md-4" align="right"><br/><br/>
								Jogja,<?php echo TanggalIndo($tgl); ?> <br/><br/><br/><br/>
								Ketua
								<?php //echo $_SESSION['nama_user']; ?>
							  </div>
