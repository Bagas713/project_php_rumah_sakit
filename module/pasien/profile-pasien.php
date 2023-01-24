<?php

  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
  $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
  $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
  $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

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

          <a href='".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
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

          <a href='".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi' >
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

          <a href='".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi' >
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

          <a href='".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis' >
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

          <a href='".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill' >
            <button type='button'  class='btn btn-info btn-lg column spc btn-menu'  style='background-color: #0081C9;'>
              Data Survival
            </button>
          </a>

          ";
      }

    ?>

  </div>
</div>

