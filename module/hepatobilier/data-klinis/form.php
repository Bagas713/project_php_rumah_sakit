<?php

  include_once("module/pasien/profile-pasien.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
  $id_klinis_hepatobilier = isset($_GET['id_klinis_hepatobilier']) ? $_GET['id_klinis_hepatobilier'] : false;
  $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
  $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
  $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;
  
  $keluhan = "";
  $period = "";
  $fam_history = "";
  $lokasi = "";
  $mrcp = "";
  $ct_scan = "";
  $button = "Save";

  if($id_klinis_hepatobilier || $id_klinis) {

    if($id_klinis_hepatobilier) {
      $query_id = mysqli_query($conn, "SELECT * FROM data_klinis_hepatobilier WHERE id_klinis_hepatobilier='$id_klinis_hepatobilier'");
      $row = mysqli_fetch_assoc($query_id);
    } else {
      $query_id = mysqli_query($conn, "SELECT * FROM data_klinis_hepatobilier WHERE id_klinis_hepatobilier='$id_klinis'");
      $row = mysqli_fetch_assoc($query_id);
    }

    $keluhan = $row['keluhan'];
    $period = $row['period'];
    $fam_history = $row['fam_history'];
    $lokasi = $row['lokasi'];
    $mrcp = $row['mrcp'];
    $ct_scan = $row['ct_scan'];
    $button = "Update";
    }

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Klinis Hepatobilier</h2>

    <form action="
            <?php

              if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival";
              } else if($id_klinis && $id_patologi && $id_data_terapi) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi";
              } else if($id_klinis && $id_patologi) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi";
              } else if($id_klinis) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis";
              } else if($id_klinis_hepatobilier) {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis_hepatobilier=$id_klinis_hepatobilier";
              } else {
                echo BASE_URL."module/$type_ill/data-klinis/action.php?type_ill=$type_ill&id_pasien=$id_pasien";
              }

            ?>
          " method="POST">
      </br>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Keluhan ticker</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="keluhan" value="<?php echo $keluhan; ?>" >
            <option>Ikterik</option>
            <option>Nyeri</option>
            <option>Demam</option>
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
            <option>Hepar</option>
            <option>Gallbladder</option>
            <option>Intrahepatic Bile Duct</option>
            <option>Perihilar Bile Duct</option>
            <option>Distal Bile Duct</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">MRCP</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="MRCP" name="mrcp" value="<?php echo $mrcp; ?>" >
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