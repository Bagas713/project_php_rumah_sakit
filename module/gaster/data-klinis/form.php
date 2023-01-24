<?php

  include_once("module/pasien/profile-pasien.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
  $id_klinis_gaster = isset($_GET['id_klinis_gaster']) ? $_GET['id_klinis_gaster'] : false;
  
  $keluhan = "";
  $period = "";
  $fam_history = "";
  $lokasi = "";
  $upper_gi_status = "";
  $endoskopi = "";
  $ct_scan = "";
  $button = "Save";

  if($id_klinis_gaster) {
    $query_id = mysqli_query($conn, "SELECT * FROM data_klinis_gaster WHERE id_klinis_gaster = '$id_klinis_gaster'");
    $row = mysqli_fetch_assoc($query_id);

    $keluhan = $row['keluhan'];
    $period = $row['period'];
    $fam_history = $row['fam_history'];
    $lokasi = $row['lokasi'];
    $upper_gi_status = $row['upper_gi_status'];
    $endoskopi = $row['endoskopi'];
    $ct_scan = $row['ct_scan'];
    $button = "Update";
    }

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Klinis Gaster</h2>

    <form action="<?php echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien"; ?>" method="POST">
      </br>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="keluhan" value="<?php echo $keluhan; ?>" >
            <option>Sulit Menelan</option>
            <option>Nyeri</option>
            <option>Kembung</option>
            <option>Muntah</option>
            <option>BAB Hitam</option>
            <option>Penurunan BB</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Lama keluhan</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan" name="period" value="<?php echo $period; ?>" >minggu
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Riwayat keluarga</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="fam_history" value="<?php echo $fam_history; ?>" > 
            <option>Ada</option>
            <option>Tidak</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="lokasi" value="<?php echo $lokasi; ?>" >
            <option>Kardia</option>
            <option>Fundus</option>
            <option>Korpus</option>
            <option>Antrum</option>
            <option>Pilorus</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Upper GI Study</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Upper GI Study" name="upper_gi_status" value="<?php echo $upper_gi_status; ?>" >
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Endoskopi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Endoskopi" name="endoskopi" value="<?php echo $endoskopi; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan infiltrasi organ</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan infiltrasi organ" name="ct_scan" value="<?php echo $ct_scan; ?>">
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