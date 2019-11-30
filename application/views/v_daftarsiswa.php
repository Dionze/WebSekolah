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
          </p>
        </blockquote>
      </blockquote>
    </blockquote>
    <table width="90%" border="1" align="center" bordercolor="#000000">
      <tr>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">No</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Nama</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Jurusan</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">No HP</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Berkas</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Bayar</div></td>
        <td bordercolor="#000000" bgcolor="#FF0000"><div align="center" class="style1">Status</div></td>
      </tr>
      <?php 
      $no = 1;
      foreach($hasil as $r){ ?>
      <tr>
        <td bordercolor="#000000"><div align="center"><?php echo $no++ ?></div></td>
        <td bordercolor="#000000"><?php echo $r['nama'] ?></td>
        <td bordercolor="#000000"><?php echo $r['jurusan'] ?></td>
        <td bordercolor="#000000"><?php echo $r['no_hp'] ?></td>
        <td bordercolor="#000000"><?php echo $r['berkas'] ?></td>
        <td bordercolor="#000000"><?php echo $r['bayar'] ?></td>
        <td bordercolor="#000000"><?php echo $r['status'] ?></td>
      </tr>
    <?php } ?> 
    </table>
    <p>
</div>
</body>
</html>