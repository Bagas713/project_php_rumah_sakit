<?php
    //
    include_once("../function/koneksi.php");
    include_once("../function/helper.php");

    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : false;
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $username = isset($_POST['username']) ? $_POST['username'] : false;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : false;
    $title = isset($_POST['title']) ? $_POST['title'] : false;
    $short = isset($_POST['short']) ? $_POST['short'] : false;
    $level = "user";

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
