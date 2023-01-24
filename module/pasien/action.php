<?php

  include_once("../../function/koneksi.php");
  include_once("../../function/helper.php");

  // $temp_id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';

  $no_rm = $_POST['no_rm'];
  $namaLengkap = $_POST['nama_lengkap'];
  $no_ktp = $_POST['no_ktp'];
  $date_born = $_POST['date_born'];
  $place_born = $_POST['place_born'];
  $umur = $_POST['umur'];
  $pendidikan = $_POST['pendidikan'];
  $job = $_POST['job'];
  $alamat = $_POST['alamat'];
  $alamat_rs = $_POST['alamat_rs'];
  $phone = $_POST['phone'];
  $fam_phone = $_POST['fam_phone'];
  $type_ill = $_POST['type_ill'];
  $button = $_POST['button'];

  if($button == "Save") {
    mysqli_query($conn, "INSERT INTO data_pasien (no_rm, nama_lengkap, no_ktp, date_born, umur, pendidikan, job, alamat, alamat_rs, phone, fam_phone, type_ill, place_born) 
                                        VALUES('$no_rm', '$namaLengkap', '$no_ktp', '$date_born','$umur', '$pendidikan', '$job', '$alamat', '$alamat_rs', '$phone', '$fam_phone', '$type_ill', '$place_born')"); 
  } else if($button == "Update") {
    $id_pasien = $_GET['id_pasien'];
    mysqli_query($conn, "UPDATE data_pasien SET no_rm='$no_rm', 
                                                nama_lengkap='$namaLengkap', 
                                                no_ktp='$no_ktp', 
                                                date_born='$date_born', 
                                                place_born='$place_born', 
                                                umur='$umur', 
                                                pendidikan='$pendidikan', 
                                                job='$job', 
                                                alamat='$alamat', 
                                                alamat_rs='$alamat_rs', 
                                                phone='$phone', 
                                                fam_phone='$fam_phone', 
                                                type_ill='$type_ill' WHERE id_pasien='$id_pasien'");
    mysqli_query($conn, "UPDATE kategori_ill SET jlh_kategori=jlh_kategori+1 WHERE nama_kategori='$type_ill' ");

    $data = mysqli_query($conn, "SELECT id_pasien FROM data_pasien WHERE id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_pasien = $dta['id_pasien'];
        }
        
        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
        $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
        $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
        $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

        if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi_esofagus=$id_patologi_esofagus&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        } else if($id_klinis && $id_patologi && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi_esofagus=$id_patologi_esofagus&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi");
        } else if($id_klinis && $id_patologi) {
            header("location:".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi_esofagus=$id_patologi_esofagus&id_klinis=$id_klinis&id_patologi=$id_patologi");
        } else if($id_klinis) {
            header("location:".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi_esofagus=$id_patologi_esofagus&id_klinis=$id_klinis");
        } else {
            header("location:".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill");
        }

  }
?>