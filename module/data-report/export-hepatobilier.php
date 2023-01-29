<?php
  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }

  include_once("module/pasien/profile-pasien.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : false;
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : false;
  $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
  $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
  $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

?>

<div class="container-export">

  <?php
    if($id_pasien) {
  ?>
    <div class="container-content-export">
      <section>
        <div class="row">
          <div class="col-lg-8">
            <h2>Identitas Pasien</h2>            
            <div class="card mb-4">   
              <div class="card-body">
                <?php
                  
                    $data = mysqli_query($conn, "SELECT * FROM data_pasien where id_pasien = '$id_pasien'"); 
                    while($dta = mysqli_fetch_array($data)){
                      $noRm = $dta['no_rm'];
                      $namaLengkap = $dta['nama_lengkap'];
                      $noKtp = $dta['no_ktp'];
                      $dateBorn = $dta['date_born'];
                      $placeBorn = $dta['place_born'];
                      $umur = $dta['umur'];
                      $pendidikan = $dta['pendidikan'];
                      $job = $dta['job'];
                      $alamat = $dta['alamat'];
                      $alamatRs = $dta['alamat_rs'];
                      $phone = $dta['phone'];
                      $famPhone = $dta['fam_phone'];
                      $type_ill = $dta['type_ill'];
                    }

                    $title = ['No RM', 'Nama Lengkap', 'No KTP', 'Tanggal Lahir', 'Tempat Lahir', 'Umur', 'Pendidikan', 'Pekerjaan', 'Alamat', 'Alamat RS', 'No HP', 'No HP Keluarga', 'Tipe Penyakit'];
                    $data = [$noRm, $namaLengkap, $noKtp, $dateBorn, $placeBorn, $umur, $pendidikan, $job, $alamat, $alamatRs, $phone, $famPhone, $type_ill];
                      for($i=0; $i<count($title); $i++) {
                        echo "
                        <div class='row'>
                          <div class='col-sm-3'>
                            <p class='mb-0'>$title[$i]</p>
                          </div>
                          <div class='col-sm-9'>
                            <p class='text-muted mb-0'> $data[$i] </p>
                          </div>
                        </div>
                        <hr>
                        ";
                      } 
                  
                  ?>
              </div>    
            </div>    
          </div>
        </div>
      </section>
    </div>
  <?php
    }
  ?>

  <?php
    if($id_klinis) {
  ?>
    <div class="container-content-export" >
      <section>
        <div class="row">
          <div class="col-lg-8">
            <h2>Data Klinis</h2>            
            <div class="card mb-4">   
              <div class="card-body">
                <?php

                  $data = mysqli_query($conn, "SELECT * FROM data_klinis_hepatobilier where id_klinis_hepatobilier = '$id_klinis'");
                  while($dta = mysqli_fetch_array($data)) {
                    $keluhan = $dta['keluhan'];
                    $period = $dta['period'];
                    $famHistory = $dta['fam_history'];
                    $lokasi = $dta['lokasi'];
                    $mrcp = $dta['mrcp'];
                    $ctScan = $dta['ct_scan'];
                  }

                  $title = ['Keluhan', 'Periode', 'Riwayat Keluarga', 'Lokasi', 'MRCP', 'CT Scan'];
                  $data = [$keluhan, $period, $famHistory, $lokasi, $mrcp, $ctScan];
                  
                  for($i=0; $i<count($title); $i++) {
                    echo "
                    <div class='row'>
                      <div class='col-sm-3'>
                        <p class='mb-0'>$title[$i]</p>
                      </div>
                      <div class='col-sm-9'>
                        <p class='text-muted mb-0'> $data[$i] </p>
                      </div>
                    </div>
                    <hr>
                    ";
                    }

                ?>
              </div>    
            </div>    
          </div>
        </div>
      </section>
    </div>
  <?php
    }
  ?>

  <?php
    if($id_patologi) {
  ?>
    <div class="container-content-export" >
      <section>
        <div class="row">
          <div class="col-lg-8">
            <h2>Data Patologi</h2>            
            <div class="card mb-4">   
              <div class="card-body">
                <?php

                  $data = mysqli_query($conn, "SELECT * FROM patologi_hepatobilier where id_patologi_hepatobilier = '$id_patologi'");
                  while($dta = mysqli_fetch_array($data)) {
                    $tumor = $dta['tumor'];
                    $node = $dta['node'];
                    $metastasis = $dta['metastasis'];
                    $lokasiMetastatis = $dta['lokasi_metastasis'];
                    $noPatologiBiopsi = $dta['no_patologi_biopsi'];
                    $tanggalBiopsi = $dta['tanggal_biopsi'];
                    $jenisPatologiBiopsi = $dta['jenis_patologi_biopsi'];
                    $gradeHistopatologi = $dta['grade_histopatologi'];
                    $reseksi = $dta['reseksi'];
                    $batasReseksiProksimal = $dta['batas_reseksi_proksimal'];
                    $batasReseksiDistal = $dta['batas_reseksi_distal'];
                    $catatanTemuanOperasi = $dta['catatan_temuan_operasi'];
                    $noPatologiOperasiDefinitif = $dta['no_patologi_operasi_definitif'];
                    $jenisPatologiOperasiDefinitif = $dta['jenis_patologi_operasi_definitif'];
                  }

                  $title = ['Tumor', 'Node', 'Metastasis', 'Lokasi Metastasis', 'No Patologi Biopsi', 'Tanggal Biopsi', 'Jenis Patologi Biopsi', 'Grade Histopatologi', 'Reseksi', 'Batas Reseksi Proksimal', 'Batas Reseksi Distal', 'Catatan Temuan Operasi', 'No Patologi Operasi Definitif', 'Jenis Patologi Operasi Definitif'];
                  $data = [$tumor, $node, $metastasis, $lokasiMetastatis, $noPatologiBiopsi, $tanggalBiopsi, $jenisPatologiBiopsi, $gradeHistopatologi, $reseksi, $batasReseksiProksimal, $batasReseksiDistal, $catatanTemuanOperasi, $noPatologiOperasiDefinitif, $jenisPatologiOperasiDefinitif];
                  
                  for($i=0; $i<count($title); $i++) {
                    echo "
                    <div class='row'>
                      <div class='col-sm-3'>
                        <p class='mb-0'>$title[$i]</p>
                      </div>
                      <div class='col-sm-9'>
                        <p class='text-muted mb-0'> $data[$i] </p>
                      </div>
                    </div>
                    <hr>
                    ";
                    }

                ?>
              </div>    
            </div>    
          </div>
        </div>
      </section>
    </div>
  <?php
    }
  ?>

  <?php
    if($id_data_terapi) {
  ?>
    <div class="container-content-export" >
      <section>
        <div class="row">
          <div class="col-lg-8">
            <h2>Data Terapi</h2>            
            <div class="card mb-4">   
              <div class="card-body">
                <?php

                  $data = mysqli_query($conn, "SELECT * FROM data_terapi where id_data_terapi = '$id_data_terapi'");
                  while($dta = mysqli_fetch_array($data)) {
                    $terapi1 = $dta['terapi_1'];
                    $ketTerapi1 = $dta['ket_terapi_1'];
                    $terapi2 = $dta['terapi_2'];
                    $ketTerapi2 = $dta['ket_terapi_2'];
                    $terapi3 = $dta['terapi_3'];
                    $ketTerapi3 = $dta['ket_terapi_3'];
                    $terapi4 = $dta['terapi_4'];
                    $ketTerapi4 = $dta['ket_terapi_4'];
                    $terapi5 = $dta['terapi_5'];
                    $ketTerapi5 = $dta['ket_terapi_5'];
                  }

                  $title = ['Terapi 1', 'Keterangan Terapi 1', 'Terapi 2', 'Keterangan Terapi 2', 'Terapi 3', 'Keterangan Terapi 3', 'Terapi 4', 'Keterangan Terapi 4', 'Terapi 5', 'Keterangan Terapi 5'];
                  $data = [$terapi1, $ketTerapi1, $terapi2, $ketTerapi2, $terapi3, $ketTerapi3, $terapi4, $ketTerapi4, $terapi5, $ketTerapi5];
                  
                  for($i=0; $i<count($title); $i++) {
                    echo "
                    <div class='row'>
                      <div class='col-sm-3'>
                        <p class='mb-0'>$title[$i]</p>
                      </div>
                      <div class='col-sm-9'>
                        <p class='text-muted mb-0'> $data[$i] </p>
                      </div>
                    </div>
                    <hr>
                    ";
                    }

                ?>
              </div>    
            </div>    
          </div>
        </div>
      </section>
    </div>
  <?php
    }
  ?>

  <?php
    if($id_data_survival) {
  ?>
    <div class="container-content-export" >
      <section>
        <div class="row">
          <div class="col-lg-8">
            <h2>Data Survival</h2>            
            <div class="card mb-4">   
              <div class="card-body">
                <?php

                  $data = mysqli_query($conn, "SELECT * FROM data_survival where id_data_survival = '$id_data_survival'");
                  while($dta = mysqli_fetch_array($data)) {
                    $typeCase = $dta['type_case'];
                    $dsStatus = $dta['ds_status'];
                    $tanggalMeninggal = $dta['tanggal_meninggal'];
                    $tanggalRekurensi = $dta['tanggal_rekurensi'];
                    $masaHidup = $dta['masa_hidup'];
                  }

                  $title = ['Type Case', 'Status', 'Tanggal Meninggal', 'Tanggal Rekurensi', 'Masa Hidup'];
                  $data = [$typeCase, $dsStatus, $tanggalMeninggal, $tanggalRekurensi, $masaHidup];
                  
                  for($i=0; $i<count($title); $i++) {
                    echo "
                    <div class='row'>
                      <div class='col-sm-3'>
                        <p class='mb-0'>$title[$i]</p>
                      </div>
                      <div class='col-sm-9'>
                        <p class='text-muted mb-0'> $data[$i] </p>
                      </div>
                    </div>
                    <hr>
                    ";
                    }

                ?>
              </div>    
            </div>    
          </div>
        </div>
      </section>
    </div>
  <?php
    }
  ?>

  <div class="export data">
    <?php
      if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_klinis && $id_patologi && $id_data_terapi) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_klinis && $id_patologi && $id_data_survival) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_survival=$id_data_survival' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_klinis && $id_data_terapi && $id_data_survival) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_patologi && $id_data_terapi && $id_data_survival) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_klinis && $id_patologi) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_klinis && $id_data_terapi) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_klinis && $id_data_survival) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_survival=$id_data_survival' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_patologi && $id_data_terapi) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_patologi && $id_data_survival) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_survival=$id_data_survival' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_data_terapi && $id_data_survival) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_klinis) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_patologi) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_data_terapi) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_data_terapi=$id_data_terapi' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else if($id_data_survival) {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill&id_data_survival=$id_data_survival' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
      else {
        echo "
          <a href='".BASE_URL."index.php?page=module/$type_ill/export-$type_ill-csv&id_pasien=$id_pasien&type_ill=$type_ill' >
          <button type='button'  class='btn btn-info btn-lg'>
            <span class='glyphicon glyphicon-export'></span> Export as Excel
          </button>
        </a>
        ";
      }
    ?>
  </div>

</div>
