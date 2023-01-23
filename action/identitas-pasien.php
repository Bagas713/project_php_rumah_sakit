<?php

  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }
  include_once("module/pasien/profile-pasien.php");
  // include_once("../function/helper.php");
  // include_once("../function/koneksi.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';

  $no_rm = "";
  $namaLengkap = "";
  $no_ktp = "";
  $date_born = "";
  $place_born = "";
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
    $place_born = $row['place_born'];
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
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
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
        <label for="inputPassword3" class="col-sm-2 col-form-label">Identitas Pasien </br> (No KTP)</label>
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
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" name="place_born" value="<?php echo $place_born; ?>">
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
          <?php
              
              $data_pendidikan = mysqli_query($conn, "SELECT pendidikan FROM data_pasien");
              while ($row = mysqli_fetch_array($data_pendidikan)) {
                echo "<option selected value='".$row['pendidikan']."'>".$row['pendidikan']."</option>";
              }

              $all_pendidikan = mysqli_query($conn, "SELECT pendidikan FROM data_pasien");
              while($rows = mysqli_fetch_array($all_pendidikan)) {
                if($rows['pendidikan'] != $pendidikan) {
                  echo "<option value='".$rows['pendidikan']."'>".$rows['pendidikan']."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="job" value="<?php echo $job; ?>">
          <?php
              
              $data_job = mysqli_query($conn, "SELECT job FROM data_pasien");
              while ($row = mysqli_fetch_array($data_job)) {
                echo "<option selected value='".$row['job']."'>".$row['job']."</option>";
              }

              $all_job = mysqli_query($conn, "SELECT job FROM data_pasien");
              while($rows = mysqli_fetch_array($all_job)) {
                if($rows['job'] != $type_job) {
                  echo "<option value='".$rows['job']."'>".$rows['job']."</option>";
                }
              }

            ?>
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
            <?php
              
              $data_ill = mysqli_query($conn, "SELECT type_ill FROM data_pasien");
              while ($row = mysqli_fetch_array($data_ill)) {
                echo "<option selected value='".$row['type_ill']."'>".$row['type_ill']."</option>";
              }

              $all_ill = mysqli_query($conn, "SELECT nama_kategori FROM kategori_ill");
              while($rows = mysqli_fetch_array($all_ill)) {
                if($rows['nama_kategori'] != $type_ill) {
                  echo "<option value='".$rows['nama_kategori']."'>".$rows['nama_kategori']."</option>";
                }
              }

            ?>
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