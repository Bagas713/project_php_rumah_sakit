<?php
  
  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';

  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }
?>

<div class="container-content-table">
  <div class="container-content" style="">
    <div class="ti">
      <h2>Data Pasien</h2>
    </div>
    
    <form action="" method="POST" >
      <div class="input-group rounded" >
        <input type="search" name="cari" class="form-control rounded" placeholder="Masukkan data yang ingin Anda cari..." aria-label="Search" aria-describedby="search-addon" 
        autofocus autocomplete="off" />
        <div>
          <button type="submit" name="search">Search</button>
        </div>
      </div>
    </form>
  </div>

  <div class="container-content">
    <div class="history-pasien-table">
      <table class="table table-hover table-data">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">No RM</th>
            <th scope="col">Nama</th>
            <th scope="col">No KTP</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat RS</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">No Telp</th>
            <th scope="col">No Telp Keluarga</th>
            <th scope="col">Pasien Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $pagination = isset($_GET["pagination"]) ? $_GET["pagination"] : 1;
            $data_perhalaman = 10;
            $mulai_dari = ($pagination-1) * $data_perhalaman;

            $dataPagination = mysqli_query($conn, "SELECT * FROM data_pasien"); 

            // $queryPagination = mysqli_query($conn, )

            if(isset($_POST["search"]))  {
              $cari = $_POST['cari'];
              $data = mysqli_query($conn, "SELECT * FROM data_pasien WHERE nama_lengkap LIKE '%$cari%'||
                                                                          no_rm LIKE '%$cari%'||
                                                                          no_ktp LIKE '%$cari%'||
                                                                          place_born LIKE '%$cari%'||
                                                                          date_born LIKE '%$cari%'||
                                                                          umur LIKE '%$cari%'||
                                                                          alamat LIKE '%$cari%'||
                                                                          alamat_rs LIKE '%$cari%'||
                                                                          pendidikan LIKE '%$cari%'||
                                                                          job LIKE '%$cari%'||
                                                                          phone LIKE '%$cari%'||
                                                                          fam_phone LIKE '%$cari%'||
                                                                          type_ill LIKE '%$cari%'"); 
            } else {
              $data = mysqli_query($conn, "SELECT * FROM data_pasien LIMIT $mulai_dari, $data_perhalaman"); 
            }

            $no = 1 + $mulai_dari;
            while($dta = mysqli_fetch_array($data)){
              $id_pasien = $dta['id_pasien'];
              $type_ill = $dta['type_ill'];


              if($type_ill == "Esofagus") {
                $data_klinis = mysqli_query($conn, "SELECT id_klinis_esofagus FROM data_klinis_esofagus WHERE dk_esofagus_id_pasien='$id_pasien'");
                $row_klinis = mysqli_fetch_assoc($data_klinis);
            
                $data_patologi = mysqli_query($conn, "SELECT id_patologi_esofagus FROM patologi_esofagus WHERE dp_esofagus_id_pasien='$id_pasien'");
                $row_patologi = mysqli_fetch_assoc($data_patologi);
            
                $data_terapi = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien='$id_pasien'");
                $row_terapi = mysqli_fetch_assoc($data_terapi);
            
                $data_survival = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien='$id_pasien'");
                $row_survival = mysqli_fetch_assoc($data_survival);
            
                $id_klinis = ($row_klinis) ? $row_klinis['id_klinis_esofagus'] : false;
                $id_patologi = ($row_patologi) ? $row_patologi['id_patologi_esofagus'] : false;
                $id_data_terapi = ($row_terapi) ? $row_terapi['id_data_terapi'] : false;
                $id_data_survival = ($row_survival) ? $row_survival['id_data_survival'] : false;
              } else if($type_ill == "Gaster") {
                $data_klinis = mysqli_query($conn, "SELECT id_klinis_gaster FROM data_klinis_gaster WHERE dk_gaster_id_pasien='$id_pasien'");
                $row_klinis = mysqli_fetch_assoc($data_klinis);
            
                $data_patologi = mysqli_query($conn, "SELECT id_patologi_gaster FROM patologi_gaster WHERE dp_gaster_id_pasien='$id_pasien'");
                $row_patologi = mysqli_fetch_assoc($data_patologi);
            
                $data_terapi = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien='$id_pasien'");
                $row_terapi = mysqli_fetch_assoc($data_terapi);
            
                $data_survival = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien='$id_pasien'");
                $row_survival = mysqli_fetch_assoc($data_survival);
            
                $id_klinis = ($row_klinis) ? $row_klinis['id_klinis_gaster'] : false;
                $id_patologi = ($row_patologi) ? $row_patologi['id_patologi_gaster'] : false;
                $id_data_terapi = ($row_terapi) ? $row_terapi['id_data_terapi'] : false;
                $id_data_survival = ($row_survival) ? $row_survival['id_data_survival'] : false;
              } else if($type_ill == "Duodenum-Jejunum-Ileum") {
                $data_klinis = mysqli_query($conn, "SELECT id_klinis_duodenum FROM data_klinis_duodenum WHERE dk_duodenum_id_pasien='$id_pasien'");
                $row_klinis = mysqli_fetch_assoc($data_klinis);
            
                $data_patologi = mysqli_query($conn, "SELECT id_patologi_duodenum FROM patologi_duodenum WHERE dp_duodenum_id_pasien='$id_pasien'");
                $row_patologi = mysqli_fetch_assoc($data_patologi);
            
                $data_terapi = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien='$id_pasien'");
                $row_terapi = mysqli_fetch_assoc($data_terapi);
            
                $data_survival = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien='$id_pasien'");
                $row_survival = mysqli_fetch_assoc($data_survival);
            
                $id_klinis = ($row_klinis) ? $row_klinis['id_klinis_duodenum'] : false;
                $id_patologi = ($row_patologi) ? $row_patologi['id_patologi_duodenum'] : false;
                $id_data_terapi = ($row_terapi) ? $row_terapi['id_data_terapi'] : false;
                $id_data_survival = ($row_survival) ? $row_survival['id_data_survival'] : false;
              } else if($type_ill == "Kolon-Rektum") {
                $data_klinis = mysqli_query($conn, "SELECT id_klinis_kolon FROM data_klinis_kolon WHERE dk_kolon_id_pasien='$id_pasien'");
                $row_klinis = mysqli_fetch_assoc($data_klinis);
            
                $data_patologi = mysqli_query($conn, "SELECT id_patologi_kolon FROM patologi_kolon WHERE dp_kolon_id_pasien='$id_pasien'");
                $row_patologi = mysqli_fetch_assoc($data_patologi);
            
                $data_terapi = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien='$id_pasien'");
                $row_terapi = mysqli_fetch_assoc($data_terapi);
            
                $data_survival = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien='$id_pasien'");
                $row_survival = mysqli_fetch_assoc($data_survival);
            
                $id_klinis = ($row_klinis) ? $row_klinis['id_klinis_kolon'] : false;
                $id_patologi = ($row_patologi) ? $row_patologi['id_patologi_kolon'] : false;
                $id_data_terapi = ($row_terapi) ? $row_terapi['id_data_terapi'] : false;
                $id_data_survival = ($row_survival) ? $row_survival['id_data_survival'] : false;
              } else if($type_ill == "Anus") {
                $data_klinis = mysqli_query($conn, "SELECT id_klinis_anus FROM data_klinis_anus WHERE dk_anus_id_pasien='$id_pasien'");
                $row_klinis = mysqli_fetch_assoc($data_klinis);
            
                $data_patologi = mysqli_query($conn, "SELECT id_patologi_anus FROM patologi_anus WHERE dp_anus_id_pasien='$id_pasien'");
                $row_patologi = mysqli_fetch_assoc($data_patologi);
            
                $data_terapi = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien='$id_pasien'");
                $row_terapi = mysqli_fetch_assoc($data_terapi);
            
                $data_survival = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien='$id_pasien'");
                $row_survival = mysqli_fetch_assoc($data_survival);
            
                $id_klinis = ($row_klinis) ? $row_klinis['id_klinis_anus'] : false;
                $id_patologi = ($row_patologi) ? $row_patologi['id_patologi_anus'] : false;
                $id_data_terapi = ($row_terapi) ? $row_terapi['id_data_terapi'] : false;
                $id_data_survival = ($row_survival) ? $row_survival['id_data_survival'] : false;
              } else if($type_ill == "Hepatobilier") {
                $data_klinis = mysqli_query($conn, "SELECT id_klinis_hepatobilier FROM data_klinis_hepatobilier WHERE dk_hepatobilier_id_pasien='$id_pasien'");
                $row_klinis = mysqli_fetch_assoc($data_klinis);
            
                $data_patologi = mysqli_query($conn, "SELECT id_patologi_hepatobilier FROM patologi_hepatobilier WHERE dp_hepatobilier_id_pasien='$id_pasien'");
                $row_patologi = mysqli_fetch_assoc($data_patologi);
            
                $data_terapi = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien='$id_pasien'");
                $row_terapi = mysqli_fetch_assoc($data_terapi);
            
                $data_survival = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien='$id_pasien'");
                $row_survival = mysqli_fetch_assoc($data_survival);
            
                $id_klinis = ($row_klinis) ? $row_klinis['id_klinis_hepatobilier'] : false;
                $id_patologi = ($row_patologi) ? $row_patologi['id_patologi_hepatobilier'] : false;
                $id_data_terapi = ($row_terapi) ? $row_terapi['id_data_terapi'] : false;
                $id_data_survival = ($row_survival) ? $row_survival['id_data_survival'] : false;
              } else if($type_ill == "Pankreas") {
                $data_klinis = mysqli_query($conn, "SELECT id_klinis_pankreas FROM data_klinis_pankreas WHERE dk_pankreas_id_pasien='$id_pasien'");
                $row_klinis = mysqli_fetch_assoc($data_klinis);
            
                $data_patologi = mysqli_query($conn, "SELECT id_patologi_pankreas FROM patologi_pankreas WHERE dp_pankreas_id_pasien='$id_pasien'");
                $row_patologi = mysqli_fetch_assoc($data_patologi);
            
                $data_terapi = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien='$id_pasien'");
                $row_terapi = mysqli_fetch_assoc($data_terapi);
            
                $data_survival = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien='$id_pasien'");
                $row_survival = mysqli_fetch_assoc($data_survival);
            
                $id_klinis = ($row_klinis) ? $row_klinis['id_klinis_pankreas'] : false;
                $id_patologi = ($row_patologi) ? $row_patologi['id_patologi_pankreas'] : false;
                $id_data_terapi = ($row_terapi) ? $row_terapi['id_data_terapi'] : false;
                $id_data_survival = ($row_survival) ? $row_survival['id_data_survival'] : false;
              } else if($type_ill == "GIST") {
                $data_klinis = mysqli_query($conn, "SELECT id_klinis_gist FROM data_klinis_gist WHERE dk_gist_id_pasien='$id_pasien'");
                $row_klinis = mysqli_fetch_assoc($data_klinis);
            
                $data_patologi = mysqli_query($conn, "SELECT id_patologi_gist FROM patologi_gist WHERE dp_gist_id_pasien='$id_pasien'");
                $row_patologi = mysqli_fetch_assoc($data_patologi);
            
                $data_terapi = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien='$id_pasien'");
                $row_terapi = mysqli_fetch_assoc($data_terapi);
            
                $data_survival = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien='$id_pasien'");
                $row_survival = mysqli_fetch_assoc($data_survival);
            
                $id_klinis = ($row_klinis) ? $row_klinis['id_klinis_gist'] : false;
                $id_patologi = ($row_patologi) ? $row_patologi['id_patologi_gist'] : false;
                $id_data_terapi = ($row_terapi) ? $row_terapi['id_data_terapi'] : false;
                $id_data_survival = ($row_survival) ? $row_survival['id_data_survival'] : false;
              }

          ?>
          <tr>
            <th scope="row"><?php  echo $no++; ?></th>
            <td><?php echo $dta['no_rm']; ?></td>
            <td><?php echo $dta['nama_lengkap']; ?></td>
            <td><?php echo $dta['no_ktp']; ?></td>
            <td><?php echo $dta['place_born']; ?></td>
            <td><?php echo $dta['date_born']; ?></td>
            <td><?php echo $dta['umur']; ?></td>
            <td><?php echo $dta['alamat_rs']; ?></td>
            <td><?php echo $dta['alamat']; ?></td>
            <td><?php echo $dta['pendidikan']; ?></td>
            <td><?php echo $dta['job']; ?></td>
            <td><?php echo $dta['phone']; ?></td>
            <td><?php echo $dta['fam_phone']; ?></td>
            <td><?php echo $type_ill; ?></td>
            <td><a href="
                  <?php

                    if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
                      echo BASE_URL."index.php?page=profile-pasien&module=pasien&action=form-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival"; 
                    } else if($id_klinis && $id_patologi && $id_data_terapi) {
                      echo BASE_URL."index.php?page=profile-pasien&module=pasien&action=form-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi"; 
                    } else if($id_klinis && $id_patologi) {
                      echo BASE_URL."index.php?page=profile-pasien&module=pasien&action=form-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi"; 
                    } else if($id_klinis) {
                      echo BASE_URL."index.php?page=profile-pasien&module=pasien&action=form-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis";
                    } else {
                      echo BASE_URL."index.php?page=profile-pasien&module=pasien&action=form-pasien&id_pasien=$id_pasien&type_ill=$type_ill"; 
                    }
 
                  ?>", 
                >
                  <i class="fa-regular fa-rectangle-list"><?php echo $id_patologi; echo $id_klinis; ?></i>
                </a></td>
          </tr>
          <?php  
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  
  <div class="pagination">
    <div>
      <?php
          
          $total_data = mysqli_num_rows($dataPagination);
          $total_halaman = ceil($total_data / $data_perhalaman);

          for($i = 1; $i<=$total_halaman; $i++) {
            
            echo "<a href='".BASE_URL."index.php?page=module/pasien/history-pasien&pagination=$i'>$i</a>";
          }
        ?>
    </div>
  </div>
</div>