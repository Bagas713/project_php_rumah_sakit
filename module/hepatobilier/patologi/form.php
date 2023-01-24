<?php

  include_once("module/pasien/profile-pasien.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
  $id_patologi_hepatobilier = isset($_GET['id_patologi_hepatobilier']) ? $_GET['id_patologi_hepatobilier'] : false;
  $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
  $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
  $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;
  
    $tumor = "";
    $node = "";
    $metastasis = "";
    $lokasi_metastasis = "";
    $no_patologi_biopsi = "";
    $tanggal_biopsi = "";
    $jenis_patologi_biopsi = "";
    $no_patologi_operasi_definitif = "";
    $jenis_patologi_operasi_definitif = "";
    $grade_histopatologi = "";
    $reseksi = "";
    $batas_reseksi_proksimal = "";
    $batas_reseksi_distal = "";
    $catatan_temuan_operasi = "";

    $button = "Save";

    if($id_patologi_hepatobilier || $id_patologi) {

      if($id_patologi_hepatobilier) {
        $query_id = mysqli_query($conn, "SELECT * FROM patologi_hepatobilier WHERE id_patologi_hepatobilier='$id_patologi_hepatobilier'");
        $row = mysqli_fetch_assoc($query_id);
      } else {
        $query_id = mysqli_query($conn, "SELECT * FROM patologi_hepatobilier WHERE id_patologi_hepatobilier='$id_patologi'");
        $row = mysqli_fetch_assoc($query_id);
      }

    $tumor = $row['tumor'];
    $node = $row['node'];
    $metastasis = $row['metastasis'];
    $lokasi_metastasis = $row['lokasi_metastasis'];
    $no_patologi_biopsi = $row['no_patologi_biopsi'];
    $tanggal_biopsi = $row['tanggal_biopsi'];
    $jenis_patologi_biopsi = $row['jenis_patologi_biopsi'];
    $no_patologi_operasi_definitif = $row['no_patologi_operasi_definitif'];
    $jenis_patologi_operasi_definitif = $row['jenis_patologi_operasi_definitif'];
    $grade_histopatologi = $row['grade_histopatologi'];
    $reseksi = $row['reseksi'];
    $batas_reseksi_proksimal = $row['batas_reseksi_proksimal'];
    $batas_reseksi_distal = $row['batas_reseksi_distal'];
    $catatan_temuan_operasi = $row['catatan_temuan_operasi'];

    $button = "Update";
    }

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Patologi Hepatobilier</h2>

    <form action="
      <?php 
        if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival";
        } 
        else if($id_klinis && $id_patologi && $id_data_terapi) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi";
        } 
        else if($id_klinis && $id_patologi && $id_data_survival) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_survival=$id_data_survival";
        } 
        else if($id_data_terapi && $id_patologi && $id_data_survival) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_terapi=$id_data_terapi&id_patologi=$id_patologi&id_data_survival=$id_data_survival";
        } 
        else if($id_data_terapi && $id_klinis && $id_data_survival) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_terapi=$id_data_terapi&id_klinis=$id_klins&id_data_survival=$id_data_survival";
        } 
        else if($id_klinis && $id_patologi) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi";
        } 
        else if($id_klinis && $id_data_survival) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_data_survival=$id_data_survival";
        } 
        else if($id_klinis && $id_data_terapi) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi";
        }
        else if($id_patologi && $id_data_terapi) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi";
        }
        else if($id_patologi && $id_data_survival) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi&id_data_survival=$id_data_survival";
        } 
        else if($id_data_survival && $id_data_terapi) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_survival=$id_data_survival&id_data_terapi=$id_data_terapi";
        }
        else if($id_patologi) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi";
        }
        else if($id_data_terapi) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_terapi=$id_data_terapi";
        }
        else if($id_data_survival) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_survival=$id_data_survival";
        }
        else if($id_klinis) {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis";
        } 
        else {
          echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien";
        }
      ?>" method="POST">
      </br>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="tumor" value="<?php echo $tumor; ?>" >
          <?php
              
              $data_tumor = mysqli_query($conn, "SELECT tumor FROM patologi_hepatobilier WHERE dp_hepatobilier_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_tumor)) {
                echo "<option selected value='".$row['tumor']."'>".$row['tumor']."</option>";
              }

              $all_tumor = mysqli_query($conn, "SELECT tumor FROM patologi_hepatobilier");
              while($rows = mysqli_fetch_array($all_tumor)) {
                if($rows['tumor'] != $tumor) {
                  echo "<option value='".$rows['tumor']."'>".$rows['tumor']."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Node</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="node" value="<?php echo $node; ?>" >
          <?php
              
              $data_node = mysqli_query($conn, "SELECT node FROM patologi_hepatobilier WHERE dp_hepatobilier_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_node)) {
                echo "<option selected value='".$row['node']."'>".$row['node']."</option>";
              }

              $all_node = mysqli_query($conn, "SELECT node FROM patologi_hepatobilier");
              while($rows = mysqli_fetch_array($all_node)) {
                if($rows['node'] != $node) {
                  echo "<option value='".$rows['node']."'>".$rows['node']."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="metastasis" value="<?php echo $metastasis; ?>" >
          <?php
              
              $data_meta = mysqli_query($conn, "SELECT metastasis FROM patologi_hepatobilier WHERE dp_hepatobilier_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_meta)) {
                echo "<option selected value='".$row['metastasis']."'>".$row['metastasis']."</option>";
              }

              $all_meta = mysqli_query($conn, "SELECT metastasis FROM patologi_hepatobilier");
              while($rows = mysqli_fetch_array($all_meta)) {
                if($rows['metastasis'] != $metastasis) {
                  echo "<option value='".$rows['metastasis']."'>".$rows['metastasis']."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Lokasi Mestastasis</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="lokasi_metastasis" value="<?php echo $lokasi_metastasis; ?>" >
          <?php
              
              $data_locmeta = mysqli_query($conn, "SELECT lokasi_metastasis FROM patologi_hepatobilier WHERE dp_hepatobilier_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_locmeta)) {
                echo "<option selected value='".$row['lokasi_metastasis']."'>".$row['lokasi_metastasis']."</option>";
              }

              $all_locmeta = mysqli_query($conn, "SELECT lokasi_metastasis FROM patologi_hepatobilier");
              while($rows = mysqli_fetch_array($all_locmeta)) {
                if($rows['lokasi_metastasis'] != $lokasi_metastasis) {
                  echo "<option value='".$rows['lokasi_metastasis']."'>".$rows['lokasi_metastasis']."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Biopsi</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Biopsi" name="no_patologi_biopsi" value="<?php echo $no_patologi_biopsi; ?>" >minggu
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Biopsi</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="inputPassword3" name="tanggal_biopsi" value="<?php echo $tanggal_biopsi; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Patologi Biopsi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Jenis Patologi Biopsi" name="jenis_patologi_biopsi" value="<?php echo $jenis_patologi_biopsi; ?>" >
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif" name="no_patologi_operasi_definitif" value="<?php echo $no_patologi_operasi_definitif; ?>" >
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Patologi Operasi Definitif</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Jenis Patologi Operasi Definitif" name="jenis_patologi_operasi_definitif" value="<?php echo $jenis_patologi_operasi_definitif; ?>" >
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="grade_histopatologi" value="<?php echo $grade_histopatologi; ?>" >
          <?php
              
              $data_grade = mysqli_query($conn, "SELECT grade_histopatologi FROM patologi_hepatobilier WHERE dp_hepatobilier_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_grade)) {
                echo "<option selected value='".$row['grade_histopatologi']."'>".$row['grade_histopatologi']."</option>";
              }

              $all_grade = mysqli_query($conn, "SELECT grade_histopatologi FROM patologi_hepatobilier");
              while($rows = mysqli_fetch_array($all_grade)) {
                if($rows['grade_histopatologi'] != $grade_histopatologi) {
                  echo "<option value='".$rows['grade_histopatologi']."'>".$rows['grade_histopatologi']."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="reseksi" value="<?php echo $reseksi; ?>" >
          <?php
              
              $data_reseksi = mysqli_query($conn, "SELECT reseksi FROM patologi_hepatobilier WHERE dp_hepatobilier_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_reseksi)) {
                echo "<option selected value='".$row['reseksi']."'>".$row['reseksi']."</option>";
              }

              $all_reseksi = mysqli_query($conn, "SELECT reseksi FROM patologi_hepatobilier");
              while($rows = mysqli_fetch_array($all_reseksi)) {
                if($rows['reseksi'] != $reseksi) {
                  echo "<option value='".$rows['reseksi']."'>".$rows['reseksi']."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Batas Reseksi Proksimal</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Batas Reseksi Proksimal" name="batas_reseksi_proksimal" value="<?php echo $batas_reseksi_proksimal; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Batas Reseksi Distal</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Batas Reseksi Distal" name="batas_reseksi_distal" value="<?php echo $batas_reseksi_distal; ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan Temuan Operasi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Catatan Temuan Operasi" name="catatan_temuan_operasi" value="<?php echo $catatan_temuan_operasi; ?>">
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