<?php

    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
    $no_rm = isset($_GET['no_rm']) ? $_GET['no_rm'] : false;
    $namaLengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
    $no_ktp = isset($_GET['no_ktp']) ? $_GET['no_ktp'] : false;
    $date_born = isset($_GET['date_born']) ? $_GET['date_born'] : false;
    $umur = isset($_GET['umur']) ? $_GET['umur'] : false;
    $pendidikan = isset($_GET['pendidikan']) ? $_GET['pendidikan'] : false;
    $job = isset($_GET['job']) ? $_GET['job'] : false;
    $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
    $alamat_rs = isset($_GET['alamat_rs']) ? $_GET['alamat_rs'] : false;
    $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
    $fam_phone = isset($_GET['fam_phone']) ? $_GET['fam__phone'] : false;
    $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : false;

    unset($_POST['password']);
    $dataFrom = http_build_query($_POST);
    echo "SELECT * FROM `account` WHERE username='$username'";

    $query = mysqli_query($conn, "SELECT * FROM `account` WHERE username='$username'");

    if(empty($email) || empty($username) || empty($password)) {
        header("location:".BASE_URL."index.php?page=user-access/register&notif=require&$dataFrom");
    } elseif(mysqli_num_rows($query) == 1) {
        header("location:".BASE_URL."index.php?page=user-access/register&notif=email&$dataFrom");
    } else {
        $password = md5($password);
        mysqli_query($conn, "INSERT INTO  account (email, username, password, first_name, last_name, phone, title, short, level)
                                        VALUES ('$email', '$username', '$password', '$firstName', '$lastName', '$phone', '$title', '$short', '$level')");
        header("location:".BASE_URL."index.php?page=user-access/login");
    };
