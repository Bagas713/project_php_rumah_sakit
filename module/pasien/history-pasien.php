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
        $data_perhalaman = 5;
        $mulai_dari = ($pagination-1) * $data_perhalaman;

        $dataPagination = mysqli_query($conn, "SELECT * FROM data_pasien"); 

        // $queryPagination = mysqli_query($conn, )

        if(isset($_POST["search"]))  {
          $cari = $_POST['cari'];
          $data = mysqli_query($conn, "SELECT * FROM data_pasien WHERE nama_lengkap LIKE '%$cari%'||
                                                                      no_rm LIKE '%$cari%'||
                                                                      no_ktp LIKE '%$cari%'||
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

          ?>
          <tr>
          <th scope="row"><?php  echo $no++; ?></th>
          <td><?php echo $dta['no_rm']; ?></td>
          <td><?php echo $dta['nama_lengkap']; ?></td>
          <td><?php echo $dta['no_ktp']; ?></td>
          <td><?php echo $dta['date_born']; ?></td>
          <td><?php echo $dta['umur']; ?></td>
          <td><?php echo $dta['alamat_rs']; ?></td>
          <td><?php echo $dta['alamat']; ?></td>
          <td><?php echo $dta['pendidikan']; ?></td>
          <td><?php echo $dta['job']; ?></td>
          <td><?php echo $dta['phone']; ?></td>
          <td><?php echo $dta['fam_phone']; ?></td>
          <td><?php echo $type_ill; ?></td>
          <td><a href="<?php echo BASE_URL."index.php?page=profile-pasien&module=pasien&action=form-pasien&id_pasien=$id_pasien&type_ill=$type_ill"; ?>", ><i class="fa-regular fa-rectangle-list"></i></a></td>
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