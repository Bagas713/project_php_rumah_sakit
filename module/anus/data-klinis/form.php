<?php

  include_once("module/pasien/profile-pasien.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
  $id_klinis_anus = isset($_GET['id_klinis_anus']) ? $_GET['id_klinis_anus'] : false;
  $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
  $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
  $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;
  
  $keluhan = "";
  $period = "";
  $fam_history = "";
  $lokasi = "";
  $kolonoskopi = "";
  $ct_scan = "";
  $button = "Save";

  if($id_klinis_anus || $id_klinis) {
    if($id_klinis_anus) {
      $query_id = mysqli_query($conn, "SELECT * FROM data_klinis_anus WHERE id_klinis_anus='$id_klinis_anus'");
      $row = mysqli_fetch_assoc($query_id);
    } else {
      $query_id = mysqli_query($conn, "SELECT * FROM data_klinis_anus WHERE id_klinis_anus='$id_klinis'");
      $row = mysqli_fetch_assoc($query_id);
    }

    $keluhan = $row['keluhan'];
    $period = $row['period'];
    $fam_history = $row['fam_history'];
    $lokasi = $row['lokasi'];
    $kolonoskopi = $row['kolonoskopi'];
    $ct_scan = $row['ct_scan'];
    $button = "Update";
    }

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Klinis Anus</h2>

    <form action="
            <?php 
              if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival";
              } 
              else if($id_klinis && $id_patologi && $id_data_terapi) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi";
              } 
              else if($id_klinis && $id_patologi && $id_data_survival) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_survival=$id_data_survival";
              } 
              else if($id_data_terapi && $id_patologi && $id_data_survival) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_terapi=$id_data_terapi&id_patologi=$id_patologi&id_data_survival=$id_data_survival";
              } 
              else if($id_data_terapi && $id_klinis && $id_data_survival) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_terapi=$id_data_terapi&id_klinis=$id_klins&id_data_survival=$id_data_survival";
              } 
              else if($id_klinis && $id_patologi) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi";
              } 
              else if($id_klinis && $id_data_survival) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_data_survival=$id_data_survival";
              } 
              else if($id_klinis && $id_data_terapi) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi";
              }
              else if($id_patologi && $id_data_terapi) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi";
              }
              else if($id_patologi && $id_data_survival) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi&id_data_survival=$id_data_survival";
              } 
              else if($id_data_survival && $id_data_terapi) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_survival=$id_data_survival&id_data_terapi=$id_data_terapi";
              }
              else if($id_patologi) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi";
              }
              else if($id_data_terapi) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_terapi=$id_data_terapi";
              }
              else if($id_data_survival) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_survival=$id_data_survival";
              }
              else if($id_klinis) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis";
              } 
              else {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien";
              }
            ?>
          " method="POST">
      </br>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Keluhan Ticker</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="keluhan" value="<?php echo $keluhan; ?>" >
          <?php
              
              $data_keluhan = mysqli_query($conn, "SELECT keluhan FROM data_klinis_anus WHERE dk_anus_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_keluhan)) {
                echo "<option selected value='".$row['keluhan']."'>".$row['keluhan']."</option>";
              }

              $all_keluhan = ["Benjolan", "Gatal", "Discharge", "Pendarahan", "Penurunan BB"];

              for($i=0; $i<count($all_keluhan); $i++) {
                if($all_keluhan[$i] != $keluhan) {
                  echo "<option value='".$all_keluhan[$i]."'>".$all_keluhan[$i]."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Lama Keluhan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Lama keluhan..." name="period" value="<?php echo $period; ?>" >minggu
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Riwayat Keluarga</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="fam_history" value="<?php echo $fam_history; ?>" > 
          <?php
              
              $data_fhis = mysqli_query($conn, "SELECT fam_history FROM data_klinis_anus WHERE dk_anus_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_fhis)) {
                echo "<option selected value='".$row['fam_history']."'>".$row['fam_history']."</option>";
              }

              $all_fhis = ["Ada", "Tidak"];

              for($i=0; $i<count($all_fhis); $i++) {
                if($all_fhis[$i] != $fam_history) {
                  echo "<option value='".$all_fhis[$i]."'>".$all_fhis[$i]."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Lokasi</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="lokasi" value="<?php echo $lokasi; ?>" >
          <?php
              
              $data_loc = mysqli_query($conn, "SELECT lokasi FROM data_klinis_anus WHERE dk_anus_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_loc)) {
                echo "<option selected value='".$row['lokasi']."'>".$row['lokasi']."</option>";
              }

              $all_loc = ["Ascendens", "Transversum", "Descendens", "Sigmoid", "Rektum"];

              for($i=0; $i<count($all_loc); $i++) {
                if($all_loc[$i] != $lokasi) {
                  echo "<option value='".$all_loc[$i]."'>".$all_loc[$i]."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Kolonoskopi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Kolonoskopi..." name="kolonoskopi" value="<?php echo $kolonoskopi; ?>" >
        </div>
      </div>


      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">CT Scan </br>Infiltrasi Organ</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="CT Scan Infiltrasi Organ..." name="ct_scan" value="<?php echo $ct_scan; ?>">
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