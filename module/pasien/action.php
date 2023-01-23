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
  }

  header("location:".BASE_URL."index.php?page=action/identitas-pasien&id_pasien=$id_pasien&type_ill=$type_ill");