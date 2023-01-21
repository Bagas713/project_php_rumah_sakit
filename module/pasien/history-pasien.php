<?php
  
  if($id_user){
      
  } else {
    header("location:index.php?page=user-access/login");
  }
?>

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
    $data = mysqli_query($conn, "SELECT * FROM data_pasien"); 
    $no = 1;
    while($dta = mysqli_fetch_array($data)){
      $id_pasien = $dta['id_pasien'];
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