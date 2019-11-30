<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>

<body>
<h1 align="center">REGISTRASI SISWA </h1>
<h1 align="center"><?php echo $this->session->flashdata('sukses') ?></h1>
	<div id="body">
	  <form action="<?php echo site_url('websekolah/insert') ?>" method="POST">
<table width="90%" border="0" align="center" cellspacing="0">
  <tr>
    <td height="63" colspan="7"><h1>Biodata Siswa</h1></td>
  </tr>
  <tr>
    <td width="26%" height="46"><strong>Nama Lengkap<span class="style1">*</span></strong> </td>
    <td width="14%">&nbsp;</td>
    <td width="8%">&nbsp;</td>
    <td width="18%"><strong>Jenis Kelamin<span class="style1">*</span></strong></td>
    <td width="1%">&nbsp;</td>
    <td width="14%">&nbsp;</td>
    <td width="19%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="nama" cols="54" wrap="virtual"></textarea></td>
    <td>&nbsp;</td>
    <td colspan="4"><input name="jeniskelamin" type="radio" value="laki-laki" />
      Laki-Laki
      <input name="jeniskelamin" type="radio" value="perempuan" />
      Perempuan</td>
  </tr>
  <tr>
    <td height="42"><strong>Tempat Lahir<span class="style1">* </span></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Agama<span class="style1">*</span></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="tempatlahir" cols="54" wrap="virtual"></textarea></td>
    <td>&nbsp;</td>
    <td colspan="4"><select name="agama">
      <option>Islam</option>
      <option>Kristen Protestan</option>
      <option>Katolik</option>
      <option>Hindu</option>
      <option>Buddha</option>
      <option>Kong Hu Cu</option>
    </select>
    </td>
  </tr>
  <tr>
    <td height="39"><strong>Tanggal Lahir<span class="style1">*</span></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Jurusan<span class="style1">*</span></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><select name="tgl_lahir" class="form">
      <?php 
   			for($tanggal = 1; $tanggal <= 31; $tanggal++) {
       		if($tanggal < 10) {
          		 echo '<option value="0'. $tanggal .'">0'. $tanggal .'</option>';
      		 }else{
          	 	echo '<option value="'. $tanggal .'">'. $tanggal .'</option>';
      		 }
   		 }
		 ?>
    </select>
        <select name="bln_lahir" class="form">
          <?php 
    		for($bulan = 1; $bulan <= 12; $bulan++) {
        	if($bulan < 10) {
            	echo '<option value="0'. $bulan .'">0'. $bulan .'</option>';
        }else{
            	echo '<option value="'. $bulan .'">'. $bulan .'</option>';
        }
    }
		?>
        </select>
        <select name="thn_lahir" class="form">
          <?php 
    		for($tahun = date('Y'); $tahun >= 1980; $tahun--) {
       			echo '<option value="'. $tahun .'">'. $tahun .'</option>';
    }
		?>
      </select></td>
    <td>&nbsp;</td>
    <td><select name="jurusan">
      <option>Teknik Kendaraan Ringan</option>
      <option>Teknik Sepeda Motor</option>
      <option>Teknik Komputer &amp; Jaringan</option>
      <option>Multimedia</option>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="45" colspan="7"><h1>Alamat Siswa </h1></td>
  </tr>
  <tr>
    <td height="43"><strong>Alamat Lengkap<span class="style1">*</span></strong> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Kota/Kabupaten<span class="style1">*</span></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="alamat" cols="54" wrap="virtual"></textarea></td>
    <td>&nbsp;</td>
    <td colspan="4"><textarea name="kota" cols="54" wrap="virtual"></textarea></td>
  </tr>
  <tr>
    <td height="41"><strong>Provinsi<span class="style1">*</span></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Kelurahan<span class="style1">*</span></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="provinsi" cols="54" wrap="virtual"></textarea></td>
    <td>&nbsp;</td>
    <td colspan="4"><textarea name="kelurahan" cols="54" wrap="virtual"></textarea></td>
  </tr>
  <tr>
    <td height="46"><strong>Kecamatan<span class="style1">*</span></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>RT/RW<span class="style1">*</span></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="kecamatan" cols="54" wrap="virtual"></textarea></td>
    <td>&nbsp;</td>
    <td><textarea name="rt" wrap="virtual"></textarea></td>
    <td>/</td>
    <td><textarea name="rw" wrap="virtual"></textarea></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><h1>Data Tambahan </h1></td>
  </tr>
  <tr>
    <td height="44"><strong>Nomor KK atau NIK Ortu/Wali<span class="style1">*</span> </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>No. HP<span class="style1">*</span> </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="nokk" cols="54" wrap="virtual"></textarea></td>
    <td>&nbsp;</td>
    <td colspan="4"><textarea name="nohp" cols="54" wrap="virtual"></textarea></td>
  </tr>
  <tr>
    <td height="46"><strong>Nomor Akta Kelahiran<span class="style1">*</span> </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><textarea name="noakta" cols="54" wrap="virtual"></textarea></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><p>
      <input type="reset" name="Reset" value="Reset" />
      <input name="Simpan" type="submit" id="Simpan" value="Simpan" />
    </p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
