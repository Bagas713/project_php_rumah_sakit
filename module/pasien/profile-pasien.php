<?php

  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';

  $data_ill = my

  if($type_ill == "Esofagus") {
    $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  }

  $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;

  $id_klinis_esofagus = isset($_GET['id_klinis_esofagus']) ? $_GET['id_klinis_esofagus'] : false;
  $id_klinis_anus = isset($_GET['id_klinis_anus']) ? $_GET['id_klinis_anus'] : false;
  $id_klinis_duodenum = isset($_GET['id_klinis_duodenum']) ? $_GET['id_klinis_duodenum'] : false;
  $id_klinis_kolon = isset($_GET['id_klinis_kolon']) ? $_GET['id_klinis_kolon'] : false;
  $id_klinis_gaster = isset($_GET['id_klinis_gaster']) ? $_GET['id_klinis_gaster'] : false;
  $id_klinis_gist = isset($_GET['id_klinis_gist']) ? $_GET['id_klinis_gist'] : false;
  $id_klinis_hepatobilier = isset($_GET['id_klinis_hepatobilier']) ? $_GET['id_klinis_hepatobilier'] : false;
  $id_klinis_pankreas = isset($_GET['id_klinis_pankreas']) ? $_GET['id_klinis_pankreas'] : false;

  $id_patologi_esofagus = isset($_GET['id_patologi_esofagus']) ? $_GET['id_patologi_esofagus'] : false;
  $id_patologi_anus = isset($_GET['id_patologi_anus']) ? $_GET['id_patologi_anus'] : false;
  $id_patologi_duodenum = isset($_GET['id_patologi_duodenum']) ? $_GET['id_patologi_duodenum'] : false;
  $id_patologi_kolon = isset($_GET['id_patologi_kolon']) ? $_GET['id_patologi_kolon'] : false;
  $id_patologi_gaster = isset($_GET['id_patologi_gaster']) ? $_GET['id_patologi_gaster'] : false;
  $id_patologi_gist = isset($_GET['id_patologi_gist']) ? $_GET['id_patologi_gist'] : false;
  $id_patologi_hepatobilier = isset($_GET['id_patologi_hepatobilier']) ? $_GET['id_patologi_hepatobilier'] : false;
  $id_patologi_pankreas = isset($_GET['id_patologi_pankreas']) ? $_GET['id_patologi_pankreas'] : false;

  $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;

  $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

  // $id_klinis_cek = [$id_klinis_esofagus, $id_klinis_anus, $id_klinis_duodenum, $id_klinis_kolon, $id_klinis_gaster, $id_klinis_gist, $id_klinis_hepatobilier, $id_klinis_pankreas];

  // $id_patologi_cek = [$id_patologi_esofagus, $id_patologi_anus, $id_patologi_duodenum, $id_patologi_kolon, $id_patologi_gaster, $id_patologi_gist, $id_patologi_hepatobilier, $id_patologi_pankreas];

  // for($i=0; $i<count($id_klinis_cek); $i++){
  //   if($id_klinis_cek[$i] == true){
  //     $id_klinis = $id_klinis_cek[$i];
  //     break;
  //   } else {
  //     $id_klinis = false;
  //   }
  // }

  // for($i=0; $i<count($id_patologi_cek); $i++){
  //   if($id_patologi_cek[$i] == true){
  //     $id_patologi = $id_patologi_cek[$i];
  //     break;
  //   } else {
  //     $id_patologi = false;
  //   }
  // }


  // $id_all_cek = [$id_klinis, $id_patologi, $id_data_terapi, $id_data_survival];

  // for($i=0; $i<count($id_all_cek); $i++){
  //   $j=0;
  //   if($id_all_cek[$i] == true){
  //     $id_all[$j] = $id_all_cek[$i];
  //     $j++;
  //   } 

  //   if($j==0){
  //     $id_all = [false, false, false, false];
  //   }
  // }


  // $id_klinis = $id_all[0];
  // $id_patologi = $id_all[1];
  // $id_data_terapi = $id_all[2];
  // $id_data_survival = $id_all[3];


?>

<div class="container-content">

  <div class="title">
    <h2>Main Menu</h2>
  </div>

  <div class="action-home row" style="margin-left: 1px">

    <?php

      if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
        echo "
          <a href='".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Identitas Pasien
            </button>
          </a>
          
          <a href='".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Klinis
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/patologi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Patologi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Terapi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Survival
            </button>
          </a>

          ";
      } else if($id_klinis && $id_patologi && $id_data_terapi) {
        echo "
          <a href='".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Identitas Pasien
            </button>
          </a>
          
          <a href='".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Klinis
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/patologi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Patologi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Terapi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Survival
            </button>
          </a>
          
          ";
      } else if($id_klinis && $id_patologi) {
        echo "
          <a href='".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Identitas Pasien
            </button>
          </a>
          
          <a href='".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Klinis
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/patologi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Patologi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Terapi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Survival
            </button>
          </a>

          ";
      } else if($id_klinis) {
        echo "
          <a href='".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Identitas Pasien
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Klinis
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/patologi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Patologi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Terapi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Survival
            </button>
          </a>
          
          ";
      } else {
        echo "
          <a href='".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Identitas Pasien
            </button>
          </a>
          
          <a href='".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Klinis
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/patologi/form&id_pasien=$id_pasien&type_ill=$type_ill' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Patologi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Terapi
            </button>
          </a>

          <a href='".BASE_URL."index.php?page=module/$type_ill/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Survival
            </button>
          </a>

          ";
      }

    ?>

  </div>
</div>

