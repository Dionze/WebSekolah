<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EDIT DATA</title>
  <style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
  </style>
</head>
<body>

<div id="container">
  <h1 align="center">*****DAFTAR SISWA*****</h1>

  <div id="body">
    <blockquote>
      <blockquote>
        <blockquote>
          <p><a href="<?php echo site_url('admin/form_input') ?>"> Tambah Data</a>
          </p>
        </blockquote>
      </blockquote>
    </blockquote>
    <table width="90%" border="1" align="center" bordercolor="#000000">
      <tr>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">No</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Nama</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Tempat Lahir</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Tanggal Lahir</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Bulan Lahir</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Tahun Lahir</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Jenis Kelamin</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Agama</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Jurusan</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Alamat</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Provinsi</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Kecamatan</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Kota/Kabupaten</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Kelurahan</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">RT</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">RW</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">No KK atau NIK Ortu</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">No Akta</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">No HP</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Berkas</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Bayar</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Status</div></td>
        <td colspan="2" bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Opsi</div></td>
      </tr>
      <?php 
      $no = 1;
      foreach($hasil as $r){ ?>
      <tr>
        <td bordercolor="#000000"><div align="center"><?php echo $no++ ?></div></td>
        <td bordercolor="#000000"><?php echo $r['nama'] ?></td>
        <td bordercolor="#000000"><?php echo $r['tempat_lahir'] ?></td>
        <td bordercolor="#000000"><?php echo $r['tgl_lahir'] ?></td>
        <td bordercolor="#000000"><?php echo $r['bln_lahir'] ?></td>
        <td bordercolor="#000000"><?php echo $r['thn_lahir'] ?></td>
        <td bordercolor="#000000"><?php echo $r['jenis_kelamin'] ?></td>
        <td bordercolor="#000000"><?php echo $r['agama'] ?></td>
        <td bordercolor="#000000"><?php echo $r['jurusan'] ?></td>
        <td bordercolor="#000000"><?php echo $r['alamat'] ?></td>
        <td bordercolor="#000000"><?php echo $r['provinsi'] ?></td>
        <td bordercolor="#000000"><?php echo $r['kecamatan'] ?></td>
        <td bordercolor="#000000"><?php echo $r['kota'] ?>n</td>
        <td bordercolor="#000000"><?php echo $r['kelurahan'] ?></td>
        <td bordercolor="#000000"><?php echo $r['rt'] ?></td>
        <td bordercolor="#000000"><?php echo $r['rw'] ?></td>
        <td bordercolor="#000000"><?php echo $r['no_kk'] ?></td>
        <td bordercolor="#000000"><?php echo $r['no_akta'] ?></td>
        <td bordercolor="#000000"><?php echo $r['no_hp'] ?></td>
        <td bordercolor="#000000"><?php echo $r['berkas'] ?></td>
        <td bordercolor="#000000"><?php echo $r['bayar'] ?></td>
        <td bordercolor="#000000"><?php echo $r['status'] ?></td>
        <td bordercolor="#000000"><a href="<?php echo site_url('admin/form_edit/'.$r['id_siswa']) ?>">Edit</a></td>
        <td bordercolor="#000000">
          <a href="<?php echo site_url('admin/form_edit/'.$r['id_siswa']) ?>"></a><a href="<?php echo site_url('admin/delete/'.$r['id_siswa']) ?>" onClick="return confirm('Anda yakin ingin menghapus data?')">Hapus</a>        </td>
      </tr>
    <?php } ?> 
    </table>
</div>
<p class="footer">&nbsp;</p>
</div>
</body>
</html>