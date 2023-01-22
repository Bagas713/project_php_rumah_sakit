<?php

  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
?>

<div class="container-content">

  <div class="title">
    <h2>Main Menu</h2>
  </div>

  <div class="action-home row" style="margin-left: 1px">
    <a href="<?php echo BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien"; ?>" >
      <button type="button"  class="btn btn-info btn-lg column spc btn-menu"  style="background-color: #0081C9;">
        Identitas Pasien
      </button>
    </a>
    <a href="<?php echo BASE_URL."index.php?page=action/data-klinis&id_pasien=$id_pasien"; ?>" >
      <button type="button" class="btn btn-info btn-lg column spc btn-menu" style="background-color: #379237;">
        Data Klinis
      </button>
    </a>

    <a href="<?php echo BASE_URL."index.php?page=action/patologi&id_pasien=$id_pasien"; ?>" >
      <button type="button" class="btn btn-info btn-lg column spc btn-menu" style="background-color: #FF9F29;">
        Data Potologi
      </button>
    </a>

    <a href="<?php echo BASE_URL."index.php?page=action/data-terapi&id_pasien=$id_pasien"; ?>" >
      <button type="button" class="btn btn-info btn-lg column spc btn-menu" style="background-color: #34B3F1;">
        Data Terapi
      </button>
    </a>

    <a href="<?php echo BASE_URL."index.php?page=action/data-survival&id_pasien=$id_pasien"; ?>" >
      <button type="button" class="btn btn-info btn-lg column spc btn-menu" style="background-color: #EB5353;">
        Data Survival
      </button>
    </a>
  </div>
</div>

