<?php

    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $no_rm = isset($_POST['no_rm']) ? $_POST['no_rm'] : false;
    $namaLengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : false;
    $no_ktp = isset($_POST['no_ktp']) ? $_POST['no_ktp'] : false;
    $date_born = isset($_POST['date_born']) ? $_POST['date_born'] : false;
    $umur = isset($_POST['umur']) ? $_POST['umur'] : false;
    $pendidikan = isset($_POST['pendidikan']) ? $_POST['pendidikan'] : false;
    $job = isset($_POST['job']) ? $_POST['job'] : false;
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : false;
    $alamat_rs = isset($_POST['alamat_rs']) ? $_POST['alamat_rs'] : false;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : false;
    $fam_phone = isset($_POST['fam_phone']) ? $_POST['fam_phone'] : false;
    $type_ill = isset($_POST['type_ill']) ? $_POST['type_ill'] : false;
    
    $query = "INSERT INTO data_pasien (no_rm, nama_lengkap, no_ktp, date_born, umur, pendidikan,
    job, alamat, alamat_rs, phone, fam_phone, type_ill) VALUES('$no_rm', '$namaLengkap', '$no_ktp', 
    '$date_born','$umur', '$pendidikan', '$job', '$alamat', '$alamat_rs', '$phone', '$fam_phone', '$type_ill')"; 

    $result = mysqli_multi_query($conn, $query);

    header("location:".BASE_URL."index.php?page=home");

?>