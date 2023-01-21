<?php
  // include_once("index.php");
  // if($id_user){
      
  // } else {
  //   header("location:index.php?page=user-access/login");
  // }

?>

<div class="container-content">
  <div class="ti">
    <h2>Data Pasien</h2>
  </div>
  <div class="input-group rounded">
    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  </div>
  <?php
        $pasien = "$id.php";
        
        if(file_exists($pasien)) {
            include_once($filename);
        } else {
            echo "Maaf, file tersebut tidak ada di dalam sistem";
        }
      ?>
</div>