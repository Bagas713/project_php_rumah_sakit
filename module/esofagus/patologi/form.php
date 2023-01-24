<?php

  include_once("module/pasien/profile-pasien.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
  $id_patologi_esofagus = isset($_GET['id_patologi_esofagus']) ? $_GET['id_patologi_esofagus'] : false;
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
    $lvi = "";
    $invasi_perineural = "";
    $catatan_temuan_operasi = "";

    $button = "Save";

  if($id_patologi_esofagus || $id_patologi) {

    if($id_patologi_esofagus) {
      $query_id = mysqli_query($conn, "SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus='$id_patologi_esofagus'");
      $row = mysqli_fetch_assoc($query_id);
    } else {
      $query_id = mysqli_query($conn, "SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus='$id_patologi'");
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
    $lvi = $row['lvi'];
    $invasi_perineural = $row['invasi_perineural'];
    $catatan_temuan_operasi = $row['catatan_temuan_operasi'];

    $button = "Update";
    }

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Patologi Esofagus</h2>

    <form action="
            <?php 

              if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
                echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival";
              } else if($id_klinis && $id_patologi && $id_data_terapi) {
                echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi";
              } else if($id_klinis && $id_patologi) {
                echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi";
              } else if($id_klinis) {
                echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis";
              } else {
                echo BASE_URL."module/$type_ill/patologi/action.php?type_ill=$type_ill&id_pasien=$id_pasien";
              }

            ?>
          " method="POST">
      </br>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Tumor</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="tumor" value="<?php echo $tumor; ?>" >
            <option>T1a</option>
            <option>T1b</option>
            <option>T2</option>
            <option>T3</option>
            <option>T4a</option>
            <option>T4b</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Node</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="node" value="<?php echo $node; ?>" >
            <option>N0</option>
            <option>N1</option>
            <option>N2</option>
            <option>N3</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Metastasis</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="metastasis" value="<?php echo $metastasis; ?>" >
            <option>M0</option>
            <option>M1</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Lokasi Metastasis</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="lokasi_metastasis" value="<?php echo $lokasi_metastasis; ?>" >
            <option>Paru</option>
            <option>Hati</option>
            <option>Peritoneal</option>
            <option>Otak</option>
            <option>Tulang</option>
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
        <label for="inputState" class="col-sm-2 col-form-label">Jenis Patologi Biopsi</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="jenis_patologi_biopsi" value="<?php echo $jenis_patologi_biopsi; ?>" >
            <option>Adenocarcinoma</option>
            <option>Squamous Cell Carcinoma</option>
            <option>Lainnya</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">No. Patologi Operasi Definitif</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="No. Patologi Operasi Definitif" name="no_patologi_operasi_definitif" value="<?php echo $no_patologi_operasi_definitif; ?>" >
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Jenis Patologi Operasi Definitif</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="jenis_patologi_operasi_definitif" value="<?php echo $jenis_patologi_operasi_definitif; ?>" >
          <option>Adenocarcinoma</option>
          <option>Squamous Cell Carcinoma</option>
          <option>Lainnya</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Grade Histopatologi</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="grade_histopatologi" value="<?php echo $grade_histopatologi; ?>" >
            <option>I</option>
            <option>II</option>
            <option>III</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Reseksi</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="reseksi" value="<?php echo $reseksi; ?>" >
            <option>R0</option>
            <option>R1</option>
            <option>R2</option>
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
        <label for="inputState" class="col-sm-2 col-form-label">LVI</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="lvi" value="<?php echo $lvi; ?>" >
            <option>Negatif</option>
            <option>Positif</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Invasi Perineural </label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="invasi_perineural" value="<?php echo $invasi_perineural; ?>" >
          <option>Negatif</option>
          <option>Positif</option>
          </select>
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