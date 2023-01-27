<?php 
  include_once("function/koneksi.php");

  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : false;
  $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : false;
  $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
  $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
  $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
  $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

  mysqli_select_db($conn, "rumahsakit");

  $filename="data-$type_ill-".date('Ymd').".csv";

  //header info for browser
  header("Content-Type:text/x-csv"); 
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //menampilkan data sebagai array dari tabel produk
    $out=array();

  if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien';
                                SELECT * FROM data_klinis_esofagus WHERE id_klinis_esofagus = '$id_klinis';
                                SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus = '$id_patologi';
                                SELECT * FROM data_terapi WHERE id_data_terapi = '$id_data_terapi';
                                SELECT * FROM data_survival WHERE id_data_survival = '$id_data_survival';");
  }
  else if($id_klinis && $id_patologi && $id_data_terapi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_klinis_esofagus WHERE id_klinis_esofagus = '$id_klinis'
                                SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus = '$id_patologi'
                                SELECT * FROM data_terapi WHERE id_data_terapi = '$id_data_terapi'");
  }
  else if($id_klinis && $id_data_terapi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_klinis_esofagus WHERE id_klinis_esofagus = '$id_klinis'
                                SELECT * FROM data_terapi WHERE id_data_terapi = '$id_data_terapi'
                                SELECT * FROM data_survival WHERE id_data_survival = '$id_data_survival'");
  }
  else if($id_klinis && $id_patologi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_klinis_esofagus WHERE id_klinis_esofagus = '$id_klinis'
                                SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus = '$id_patologi'
                                SELECT * FROM data_survival WHERE id_data_survival = '$id_data_survival'");
  }
  else if($id_patologi && $id_data_terapi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus = '$id_patologi'
                                SELECT * FROM data_terapi WHERE id_data_terapi = '$id_data_terapi'
                                SELECT * FROM data_survival WHERE id_data_survival = '$id_data_survival'");
  }
  else if($id_klinis && $id_patologi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_klinis_esofagus WHERE id_klinis_esofagus = '$id_klinis'
                                SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus = '$id_patologi'");
  }
  else if($id_klinis && $id_data_terapi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_klinis_esofagus WHERE id_klinis_esofagus = '$id_klinis'
                                SELECT * FROM data_terapi WHERE id_data_terapi = '$id_data_terapi'");
  }
  else if($id_klinis && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_klinis_esofagus WHERE id_klinis_esofagus = '$id_klinis'
                                SELECT * FROM data_survival WHERE id_data_survival = '$id_data_survival'");
  }
  else if($id_patologi && $id_data_terapi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus = '$id_patologi'
                                SELECT * FROM data_terapi WHERE id_data_terapi = '$id_data_terapi'");
  }
  else if($id_patologi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus = '$id_patologi'
                                SELECT * FROM data_survival WHERE id_data_survival = '$id_data_survival'");
  }
  else if($id_data_terapi && $id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_terapi WHERE id_data_terapi = '$id_data_terapi'
                                SELECT * FROM data_survival WHERE id_data_survival = '$id_data_survival'");
  }
  else if($id_klinis) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_klinis_esofagus WHERE id_klinis_esofagus = '$id_klinis'");
  }
  else if($id_patologi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM patologi_esofagus WHERE id_patologi_esofagus = '$id_patologi'");
  }
  else if($id_data_terapi) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_terapi WHERE id_data_terapi = '$id_data_terapi'");
  }
  else if($id_data_survival) {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'
                                SELECT * FROM data_survival WHERE id_data_survival = '$id_data_survival'");
  }
  else {
    $sql = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'");
  }

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