<?php

  include_once("../../function/koneksi.php");
  include_once("../../function/helper.php");


  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $title = $_POST['title'];
  $short = $_POST['short'];
  $button = $_POST['button'];

  $password = md5($password);

  if($button == "add") {
    mysqli_query($conn, "INSERT INTO  account (email, username, password, first_name, last_name, phone, title, short)
                                  VALUES ('$email', '$username', '$password', '$firstName', '$lastName', '$phone', '$title', '$short')");
  }else if($button == "Update") {
    $id_user = $_GET['id_user'];
    mysqli_query($conn, "UPDATE account SET first_name='$firstName',
                                            last_name='$lastName',
                                            phone='$phone',
                                            title='$title',
                                            short='$short',
                                            password='$password' WHERE id_user='$id_user'");
  }


  header("location:".BASE_URL."index.php?page=profile-dokter&module=dokter&action=profile-dokter");