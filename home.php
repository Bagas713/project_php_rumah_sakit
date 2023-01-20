<?php

  if($id_user){
    
  } else {
    header("location:index.php?page=user-access/login");
  }

?>

<div class="container-content">

  <div class="title">
    <h2>Main Menu</h2>
  </div>

  <div class="action-home row" style="margin-left: 1px">
    <button type="button" class="btn btn-info btn-lg column spc" onclick="openTab('b1');">
      Add
    </button>
    
    <a href="http://localhost/project_php_rumah_sakit/index.php?page=data-pasien" >
      <button type="button" class="btn btn-secondary btn-lg column">Update</button>
    </a>    
  </div>

  <div id="b1" class="containerTab" style="display:none;background:white">

    <div class="action-home row" style="margin-left: 1px; margin-bottom: 20px; display: grid; row-gap: 10px; grid-template-columns: auto auto auto auto; ">
      <button type="button" class="btn btn-light">Esofagus</button>
      <button type="button" class="btn btn-light">Gaster</button>
      <button type="button" class="btn btn-light">Kolon - Rektum</button>
      <button type="button" class="btn btn-light">Anus</button>
      <button type="button" class="btn btn-light">Hepatobiliar</button>
      <button type="button" class="btn btn-light">Pankreas</button>
      <button type="button" class="btn btn-light">GIST</button>
      <button type="button" class="btn btn-light">Duodenum - Jejunum - Ileum</button>
    </div>

    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Identitas Pasien</h2>

    <form action="<?php echo BASE_URL."set-upload-dataPasien.php"; ?>" method="POST">
      <?php
        $notif = isset($_POST['notif']) ? $_POST['notif'] : false;
        $no_rm = isset($_POST['no_rm']) ? $_POST['no_rm'] : false;
        $namaLengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : false;
        $no_ktp = isset($_POST['no_ktp']) ? $_POST['no_ktp'] : false;
        $date_born = isset($_POST['date_born']) ? $_POST['date_born'] : false;
        $umur = isset($_POST['umur']) ? $_POST['umur'] : false;
        $pendidikan = isset($_POST['pendidikan']) ? $_POST['pendidikan'] : false;
        $job = isset($_POST['job']) ? $_POST['job'] : false;
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : false;
        $alamat_rs = isset($_POST['alamat_rs']) ? $_POST['alamat_rs'] : false;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : false;
        $fam_phone = isset($_POST['fam_phone']) ? $_POST['fam_phone'] : false;
        $type_ill = isset($_POST['type_ill']) ? $_POST['type_ill'] : false;

        if($notif == "require") {
            echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
        }
      ?>

      </br>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">No. RM</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="No. RM" name="no_rm">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" name="nama_lengkap">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Identitas Pasien (KTP)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Identitas Pasien (KTP)" name="no_ktp">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" name="date_born">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Umur" name="umur">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Pendidikan</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="pendidikan">
            <option>SD</option>
            <option>SMP/SMA</option>
            <option>S1/S2</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="job">
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
          <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat Sesuai KTP" name="alamat">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Rumah Sakit Tempat Pelayanan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Rumah Sakit Tempat Pelayanan" name="alamat_rs">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No Telp Pasien</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="No Telp Pasien" name="phone">
        </div>
      </div><div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No Telp Keluarga Dekat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="No Telp Keluarga Dekat" name="fam_phone">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Jenis Kasus</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="type_ill">
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
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
  </div>

</div>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>