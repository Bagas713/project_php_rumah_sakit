<?php

  include_once("module/pasien/profile-pasien.php");
  // include_once("../function/helper.php");
  // include_once("../function/koneksi.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';

  $no_rm = "";
  $namaLengkap = "";
  $no_ktp = "";
  $date_born = "";
  $umur = "";
  $pendidikan = "";
  $job = "";
  $alamat = "";
  $alamat_rs = "";
  $phone = "";
  $fam_phone = "";
  $type_ill = "";
  $button = "Save";

  if($id_pasien) {
    $queryPasien = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien='$id_pasien'");
    $row = mysqli_fetch_assoc($queryPasien);
    
    $no_rm = $row['no_rm'];
    $namaLengkap = $row['nama_lengkap'];
    $no_ktp = $row['no_ktp'];
    $date_born = $row['date_born'];
    $umur = $row['umur'];
    $pendidikan = $row['pendidikan'];
    $job = $row['job'];
    $alamat = $row['alamat'];
    $alamat_rs = $row['alamat_rs'];
    $phone = $row['phone'];
    $fam_phone = $row['fam_phone'];
    $type_ill = $row['type_ill'];
    $button = "Update";
  }
?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <h2>Identitas Pasien</h2>
    <form action="<?php echo BASE_URL."module/pasien/action.php?id_pasien=$id_pasien"; ?>" method="POST">
      </br>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">No. RM</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="No. RM" name="no_rm" value="<?php echo $no_rm; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo $namaLengkap; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Identitas Pasien (KTP)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Identitas Pasien (KTP)" name="no_ktp" value="<?php echo $no_ktp; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" name="date_born" value="<?php echo $date_born; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Umur" name="umur" value="<?php echo $umur; ?>">
        </div>
      </div>
     <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Pendidikan</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="pendidikan" value="<?php echo $pendidikan; ?>">
            <option>SD</option>
            <option>SMP/SMA</option>
            <option option>S1/S2</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="job" value="<?php echo $job; ?>">
            <option>Buruh</option>
            <option>Petani</option>
            <option>Wiraswasta</option>
            <option>Guru</option>
            <option>Swasta/PNS</option>
            <option>Tidak Bekerja</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Sesuai KTP</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat Sesuai KTP" name="alamat" value="<?php echo $alamat; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Rumah Sakit Tempat Pelayanan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Rumah Sakit Tempat Pelayanan" name="alamat_rs" value="<?php echo $alamat_rs; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No Telp Pasien</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="No Telp Pasien" name="phone" value="<?php echo $phone; ?>">
        </div>
      </div><div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No Telp Keluarga Dekat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="No Telp Keluarga Dekat" name="fam_phone" value="<?php echo $fam_phone; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Jenis Kasus</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="type_ill" value="<?php echo $type_ill; ?>">
            <option>Esofagus</option>
            <option>Gaster</option>
            <option>Duodenum-Jejunum-Ileum</option>
            <option>Kolom-Rektum</option>
            <option>Anus</option>
            <option>Heptibiliar</option>
            <option>Pankreas</option>
            <option>GIST</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit" name="button" class="btn btn-primary" value="<?php echo $button; ?>"/>
        </div>
      </div>
    </form>
  </div>
</div>