<?php
  include_once("function/koneksi.php");
  include_once("function/helper.php");

  // $dataPasien = query("SELECT * FROM data_pasien");

  // function search($keyword) {
  //   $qSearch = mysqli_query($conn, "SELECT * FROM data_pasien WHERE nama_lengkap LIKE '%$keyword&'"); 
  //   return $qSearch;
  // }
  //tombol cari ditekan
  // if(isset($_GET["search"]))  {
  //   $data = mysqli_query($conn, "SELECT * FROM data_pasien WHERE nama_lengkap LIKE '%".$_GET["search"]."%'"); 
  // }
  // include_once("index.php");
  // if($id_user){
      
  // } else {
  //   header("location:index.php?page=user-access/login");
  // }

  //Search
  // $search = isset($_GET["search"]) ? $_GET["search"] : false;

  // $where = "";
  // $search_url = "";
  // if($search) {
  //   $search_url = "&search=$search";
  //   $where = "WHERE data_pasien.id_pasien LIKE '%$search%'";
  // }

  // $query = mysqli_query($conn,"SELECT * FROM data_pasien LIKE  " )

  //Pagination
  // $pagination = isset($_GET["pagination"]) ? $_GET["pagination"] : 1;
  // $data_perhalaman = 3;
  // $mulai_dari = ($pagination-1) * $data_perhalaman;

  
  // $querySearch = mysqli_query($conn, "SELECT * FROM $mulai_dari, $data_perhalaman");

  // if(mysqli_num_rows($querySearch) == 0 {
  //   echo "<h3>Maaf, saat ini belum ada data yang Anda cari</h3>"
  // } else {
  //   $no=1;
  //   while($row = mysqli_fetch_assoc($querySearch)) {

  //   }
  // }
?>

<div class="container-content">
  <div class="ti">
    <h2>Data Pasien</h2>
  </div>
  
  <form action="" method="GET" >
    <div class="input-group rounded" >
      <input type="text" name="cari" class="form-control rounded" placeholder="Masukkan data yang ingin Anda cari..." aria-label="Search" aria-describedby="search-addon" 
      autofocus autocomplete="off" value="<?php if(isset($_GET['cari'])) { echo $_GET['cari']; } ?> "/>
      <div>
        <button type="submit" name="search">Search</button>
      </div>
    </div>
  </form>


  <table class="table table-hover">
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
      <th scope="col">Pasien Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $data = "SELECT * FROM data_pasien WHERE nama_lengkap LIKE '%$cari'||
                                                                  no_rm LIKE '%$cari'||
                                                                  no_ktp LIKE '%$cari'||
                                                                  date_born LIKE '%$cari'||
                                                                  umur LIKE '%$cari'||
                                                                  alamat LIKE '%$cari'||
                                                                  alamat_rs LIKE '%$cari'||
                                                                  pendidikan LIKE '%$cari'||
                                                                  job LIKE '%$cari'||
                                                                  phone LIKE '%$cari'||
                                                                  type_ill LIKE '%$cari'"; 
      $result = mysqli_query($conn, $data);
      
      $no = 1;
      while($dta = mysqli_fetch_array($result)) {
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
      <td><?php echo $dta['type_ill']; ?></td>
      <td><a href="<?php echo BASE_URL."index.php?page=profile-pasien&module=pasien&action=form-pasien&id_pasien=$id_pasien"; ?>", ><i class="fa-regular fa-rectangle-list"></i></a></td>
    </tr>
    <?php  
    }
    ?>
  </tbody>
</table>
  <!-- <form action="" method="POST" style="width: auto; margin: auto;">
    <input type="text" name="keyword">
    <button type="submit" name="search" Search></button> -->
  


  <!-- <div class="input-group rounded">
    <input type="text" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  </div>
  
  <div class="input-group rounded">
    <input type="text" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  </div> -->
</div>