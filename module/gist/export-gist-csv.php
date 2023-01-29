<?php 
  include_once("function/koneksi.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : false;
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : false;
  $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
  $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
  $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

  // mysqli_select_db($conn, "rumahsakit");

  $data = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = $id_pasien");
  while ($row = mysqli_fetch_array($data)) {
    $noRm = $row['no_rm'];
    $namaLengkap = $row['nama_lengkap'];
  }

  $filename="data-$noRm-$namaLengkap-$type_ill-".date('Ymd').".csv";

    //menampilkan data sebagai array dari tabel produk
    $out=array();

  if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_klinis_gist ON data_pasien.id_pasien = data_klinis_gist.dk_gist_id_pasien
                                JOIN patologi_gist ON data_pasien.id_pasien = patologi_gist.dp_gist_id_pasien
                                JOIN data_terapi ON data_pasien.id_pasien = data_terapi.dt_id_pasien
                                JOIN data_survival ON data_pasien.id_pasien = data_survival.ds_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_klinis && $id_patologi && $id_data_terapi) {
    $sql = mysqli_query($conn,"SELECT * FROM data_pasien
                                JOIN data_klinis_gist ON data_pasien.id_pasien = data_klinis_gist.dk_gist_id_pasien
                                JOIN patologi_gist ON data_pasien.id_pasien = patologi_gist.dp_gist_id_pasien
                                JOIN data_terapi ON data_pasien.id_pasien = data_terapi.dt_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_klinis && $id_data_terapi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_klinis_gist ON data_pasien.id_pasien = data_klinis_gist.dk_gist_id_pasien
                                JOIN data_terapi ON data_pasien.id_pasien = data_terapi.dt_id_pasien
                                JOIN data_survival ON data_pasien.id_pasien = data_survival.ds_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_klinis && $id_patologi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_klinis_gist ON data_pasien.id_pasien = data_klinis_gist.dk_gist_id_pasien
                                JOIN patologi_gist ON data_pasien.id_pasien = patologi_gist.dp_gist_id_pasien
                                JOIN data_survival ON data_pasien.id_pasien = data_survival.ds_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_patologi && $id_data_terapi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN patologi_gist ON data_pasien.id_pasien = patologi_gist.dp_gist_id_pasien
                                JOIN data_terapi ON data_pasien.id_pasien = data_terapi.dt_id_pasien
                                JOIN data_survival ON data_pasien.id_pasien = data_survival.ds_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_klinis && $id_patologi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_klinis_gist ON data_pasien.id_pasien = data_klinis_gist.dk_gist_id_pasien
                                JOIN patologi_gist ON data_pasien.id_pasien = patologi_gist.dp_gist_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_klinis && $id_data_terapi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_klinis_gist ON data_pasien.id_pasien = data_klinis_gist.dk_gist_id_pasien
                                JOIN data_terapi ON data_pasien.id_pasien = data_terapi.dt_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_klinis && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_klinis_gist ON data_pasien.id_pasien = data_klinis_gist.dk_gist_id_pasien
                                JOIN data_survival ON data_pasien.id_pasien = data_survival.ds_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_patologi && $id_data_terapi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN patologi_gist ON data_pasien.id_pasien = patologi_gist.dp_gist_id_pasien
                                JOIN data_terapi ON data_pasien.id_pasien = data_terapi.dt_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_patologi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN patologi_gist ON data_pasien.id_pasien = patologi_gist.dp_gist_id_pasien
                                JOIN data_survival ON data_pasien.id_pasien = data_survival.ds_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_data_terapi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_terapi ON data_pasien.id_pasien = data_terapi.dt_id_pasien
                                JOIN data_survival ON data_pasien.id_pasien = data_survival.ds_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_klinis) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_klinis_gist ON data_pasien.id_pasien = data_klinis_gist.dk_gist_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_patologi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN patologi_gist ON data_pasien.id_pasien = patologi_gist.dp_gist_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_data_terapi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_terapi ON data_pasien.id_pasien = data_terapi.dt_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else if($id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien
                                JOIN data_survival ON data_pasien.id_pasien = data_survival.ds_id_pasien
                                WHERE data_pasien.id_pasien = $id_pasien");
  }
  else {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE data_pasien.id_pasien = $id_pasien");
  }

  ob_end_clean();

  while($data=mysqli_fetch_assoc($sql)) $out[]=$data;
  

  // create a file pointer connected to the output stream
  $fh = fopen( 'php://output', 'w' );
  $heading = false;
  if(!empty($out))
    foreach($out as $row) {
      if(!$heading) {
        //menampilkan nama kolom di baris pertama
        fputcsv($fh, array_keys($row));
        $heading = true;
      }
      // looping data dari database  
      fputcsv($fh, array_values($row));
    }
    fclose($fh);

  
?>