<?php

  include_once("module/pasien/profile-pasien.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
  $id_klinis_esofagus = isset($_GET['id_klinis_esofagus']) ? $_GET['id_klinis_esofagus'] : false;
  $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
  $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
  $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;
  
  $terapi1 = "";
  $ketTerapi1 = "";
  $terapi2 = "";
  $ketTerapi2 = "";
  $terapi3 = "";
  $ketTerapi3 = "";
  $terapi4 = "";
  $ketTerapi4 = "";
  $terapi5 = "";
  $ketTerapi5 = "";
  $button = "Save";

  if($id_data_terapi) {

    $query_id = mysqli_query($conn, "SELECT * FROM data_terapi WHERE id_data_terapi='$id_data_terapi'");
    $row = mysqli_fetch_assoc($query_id);
  

    $terapi1 = $row['terapi_1'];
    $ketTerapi1 = $row['ket_terapi_1'];
    $terapi2 = $row['terapi_2'];
    $ketTerapi2 = $row['ket_terapi_2'];
    $terapi3 = $row['terapi_3'];
    $ketTerapi3 = $row['ket_terapi_3'];
    $terapi4 = $row['terapi_4'];
    $ketTerapi4 = $row['ket_terapi_4'];
    $terapi5 = $row['terapi_5'];
    $ketTerapi5 = $row['ket_terapi_5'];
    $button = "Update";
    }

?>

<div class="container-content">
  <div class="containerTab" style="background:white">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <h2>Data Terapi</h2>

    <form action="
            <?php

              if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival";
              } 
              else if($id_klinis && $id_patologi && $id_data_terapi) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi";
              } 
              else if($id_klinis && $id_patologi && $id_data_survival) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_survival=$id_data_survival";
              }
              else if($id_patologi && $id_data_terapi && $id_data_survival) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival";
              }
              else if($id_klinis && $id_data_terapi && $id_data_survival) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival";
              }
              else if($id_klinis && $id_patologi) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_patologi=$id_patologi";
              } 
              else if($id_klinis && $id_data_survival) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_data_survival=$id_data_survival";
              } 
              else if($id_klinis && $id_data_terapi) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi";
              } 
              else if($id_patologi && $id_data_terapi) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi";
              } 
              else if($id_patologi && $id_data_survival) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi&id_data_survival=$id_data_survival";
              } 
              else if($id_data_terapi && $id_data_survival) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival";
              }
              else if($id_klinis) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_klinis=$id_klinis";
              } 
              else if($id_patologi) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_patologi=$id_patologi";
              } 
              else if($id_data_terapi) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_terapi=$id_data_terapi";
              } 
              else if($id_data_survival) {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien&id_data_survival=$id_data_survival";
              }
              else {
                echo BASE_URL."module/data-terapi/action.php?type_ill=$type_ill&id_pasien=$id_pasien";
              }

            ?>
          " method="POST">
      </br>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Terapi 1</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="terapi_1" value="<?php echo $terapi1; ?>" >
            <?php
              
              $data_thr1 = mysqli_query($conn, "SELECT terapi_1 FROM data_terapi WHERE dt_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_thr1)) {
                echo "<option selected value='".$row['terapi_1']."'>".$row['terapi_1']."</option>";
              }

              $all_thr1 = ['Operasi', 'Kemoterapi', 'Radioterapi', 'Suportif'];
              for($i=0; $i<count($all_thr1); $i++) {
                if($all_thr1[$i] != $terapi1) {
                  echo "<option value='".$all_thr1[$i]."'>".$all_thr1[$i]."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan Terapi 1</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Keterangan Terapi 1" name="ket_terapi_1" value="<?php echo $ketTerapi1; ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Terapi 2</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="terapi_2" value="<?php echo $terapi2; ?>" >
            <?php
              
              $data_thr2 = mysqli_query($conn, "SELECT terapi_2 FROM data_terapi WHERE dt_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_thr2)) {
                echo "<option selected value='".$row['terapi_2']."'>".$row['terapi_2']."</option>";
              }

              $all_thr2 = ['Operasi', 'Kemoterapi', 'Radioterapi', 'Suportif'];
              for($i=0; $i<count($all_thr2); $i++) {
                if($all_thr2[$i] != $terapi2) {
                  echo "<option value='".$all_thr2[$i]."'>".$all_thr2[$i]."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan Terapi 2</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Keterangan Terapi 2" name="ket_terapi_2" value="<?php echo $ketTerapi2; ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Terapi 3</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="terapi_3" value="<?php echo $terapi3; ?>" >
          <?php
              
              $data_thr3 = mysqli_query($conn, "SELECT terapi_3 FROM data_terapi WHERE dt_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_thr3)) {
                echo "<option selected value='".$row['terapi_3']."'>".$row['terapi_3']."</option>";
              }

              $all_thr3 = ['Operasi', 'Kemoterapi', 'Radioterapi', 'Suportif'];
              for($i=0; $i<count($all_thr3); $i++) {
                if($all_thr3[$i] != $terapi3) {
                  echo "<option value='".$all_thr3[$i]."'>".$all_thr3[$i]."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan Terapi 3</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Keterangan Terapi 3" name="ket_terapi_3" value="<?php echo $ketTerapi3; ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Terapi 4</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="terapi_4" value="<?php echo $terapi4; ?>" >
            <?php
              
              $data_thr4 = mysqli_query($conn, "SELECT terapi_4 FROM data_terapi WHERE dt_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_thr4)) {
                echo "<option selected value='".$row['terapi_4']."'>".$row['terapi_4']."</option>";
              }

              $all_thr4 = ['Operasi', 'Kemoterapi', 'Radioterapi', 'Suportif'];
              for($i=0; $i<count($all_thr4); $i++) {
                if($all_thr4[$i] != $terapi4) {
                  echo "<option value='".$all_thr4[$i]."'>".$all_thr4[$i]."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan Terapi 4</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Keterangan Terapi 4" name="ket_terapi_4" value="<?php echo $ketTerapi4; ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="inputState" class="col-sm-2 col-form-label">Terapi 5</label>
        <div class="col-sm-10">
          <select id="inputState" class="form-control" name="terapi_5" value="<?php echo $terapi5; ?>" >
            <?php
              
              $data_thr5 = mysqli_query($conn, "SELECT terapi_5 FROM data_terapi WHERE dt_id_pasien = '$id_pasien'");
              while ($row = mysqli_fetch_array($data_thr5)) {
                echo "<option selected value='".$row['terapi_5']."'>".$row['terapi_5']."</option>";
              }

              $all_thr5 = ['Operasi', 'Kemoterapi', 'Radioterapi', 'Suportif'];
              for($i=0; $i<count($all_thr5); $i++) {
                if($all_thr5[$i] != $terapi5) {
                  echo "<option value='".$all_thr5[$i]."'>".$all_thr5[$i]."</option>";
                }
              }

            ?>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan Terapi 5</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Keterangan Terapi 5" name="ket_terapi_5" value="<?php echo $ketTerapi5; ?>" >
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