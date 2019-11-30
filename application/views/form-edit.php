<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EDIT DATA</title>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style><body>

<div id="container">
  <h1 align="center">*****EDIT DATA*****</h1>

  <div id="body">
    <blockquote>
      <blockquote>
        <blockquote>
          <p><a href="<?php echo site_url('admin/index') ?>">KEMBALI</a>
            <?php if($dataEdit){
      $id = $dataEdit->id_siswa;
      $nama = $dataEdit->nama;
      $tempatlahir = $dataEdit->tempat_lahir;
      $tgl_lahir = $dataEdit->tgl_lahir;
      $bln_lahir = $dataEdit->bln_lahir;
      $thn_lahir = $dataEdit->thn_lahir;
      $jeniskelamin = $dataEdit->jenis_kelamin;
      $agama = $dataEdit->agama;
      $jurusan = $dataEdit->jurusan;
      $alamat = $dataEdit->alamat;
      $provinsi = $dataEdit->provinsi;
      $kota = $dataEdit->kota;
      $kecamatan = $dataEdit->kecamatan;
      $kelurahan = $dataEdit->kelurahan;
      $rt = $dataEdit->rt;
      $rw = $dataEdit->rw;
      $nokk = $dataEdit->no_kk;
      $noakta = $dataEdit->no_akta;
      $nohp = $dataEdit->no_hp;
      $berkas = $dataEdit->berkas;
      $bayar = $dataEdit->bayar;
      $status = $dataEdit->status;
    }else{
      $nama ="";
      $tempatlahir ="";
      $tgl_lahir ="";
      $bln_lahir ="";
      $thn_lahir ="";
      $jeniskelamin ="";
      $agama ="";
      $jurusan ="";
      $alamat ="";
      $provinsi ="";
      $kota ="";
      $kecamatan ="";
      $kelurahan ="";
      $rt ="";
      $rw ="";
      $nokk ="";
      $noakta ="";
      $nohp ="";
      $berkas ="";
      $bayar =""; 
      $status =""; 
    }?>
          </p>
        </blockquote>
      </blockquote>
    </blockquote>
    <form action="<?php echo site_url('admin/update/'.$id) ?>" method="POST">
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
    <td colspan="2"><input type="textarea" name="nama" value="<?php echo $nama ?>"></td>
    <td>&nbsp;</td>
        <td colspan="4"><select name="jeniskelamin">
      <option>Laki-laki</option>
      <option>Perempuan</option>
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
    <td colspan="2"><input type="text" name="tempatlahir" cols="54" value="<?php echo $tempatlahir ?>"></td>
    <td>&nbsp;</td>
    <td colspan="4"><select type="select" name="agama" value="<?php echo $agama ?>">
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
    <td colspan="2"><select type="select" name="tgl_lahir" class="form" value="<?php echo $tgl_lahir ?>">
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
        <select name="bln_lahir" class="form" value="<?php echo $bln_lahir ?>">
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
        <select name="thn_lahir" class="form" value="<?php echo $thn_lahir ?>">
          <?php 
        for($tahun = date('Y'); $tahun >= 1980; $tahun--) {
            echo '<option value="'. $tahun .'">'. $tahun .'</option>';
    }
    ?>
      </select></td>
    <td>&nbsp;</td>
    <td><select type="select" name="jurusan" value="<?php echo $jurusan ?>">
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
    <td colspan="2"><input type="textarea" name="alamat" cols="54" value="<?php echo $alamat ?>"></td>
    <td>&nbsp;</td>
    <td colspan="4"><input type="textarea" name="kota" cols="54" value="<?php echo $kota ?>"></textarea></td>
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
    <td colspan="2"><input type="textarea" name="provinsi" cols="54" value="<?php echo $provinsi ?>"></td>
    <td>&nbsp;</td>
    <td colspan="4"><input type="textarea" name="kelurahan" cols="54" value="<?php echo $kelurahan ?>"></td>
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
    <td colspan="2"><input type="textarea" name="kecamatan" cols="54" value="<?php echo $kecamatan ?>"></td>
    <td>&nbsp;</td>
    <td><input type="textarea" name="rt" value="<?php echo $rt ?>"></td>
    <td>/</td>
    <td><input type="textarea" name="rw" value="<?php echo $rw ?>"></td>
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
    <td colspan="2"><input type="textarea" name="nokk" cols="54" value="<?php echo $nokk ?>"></td>
    <td>&nbsp;</td>
    <td colspan="4"><input type="textarea" name="nohp" cols="54" value="<?php echo $nohp ?>"></td>
  </tr>
  <tr>
    <td height="46"><strong>Nomor Akta Kelahiran<span class="style1">*</span> </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Berkas</strong></td>
    <td>&nbsp;</td>
    <td><strong>Bayar</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><input type="textarea" name="noakta" cols="54" value="<?php echo $noakta ?>"></td>
    <td>&nbsp;</td>
    <td><select type="select" name="berkas" value="<?php echo $berkas ?>">
      <option>Belum Lengkap</option>
      <option>Lengkap</option>
    </select></td>
    <td>&nbsp;</td>
    <td><select type="select" name="bayar" value="<?php echo $bayar ?>">
      <option>Belum Lunas</option>
      <option>Lunas</option>
    </select></td>
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
    <td><strong>Status</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select type="select" name="status" value="<?php echo $status ?>">
      <option>Belum Diterima</option>
      <option>Diterima</option>
      <option>Tidak Diterima</option>
    </select></td>
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
    </form>
</div>
</div>
</body>
</html>