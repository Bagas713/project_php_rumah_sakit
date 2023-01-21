<?php

    include_once("../function/koneksi.php");
    include_once("../function/helper.php");

    if (isset($id_user)) {
      $firstName = $_POST['first_name'];
      $lastName = $_POST['last_name'];
      $phone = $_POST['phone'];
      $title = $_POST['title'];
      $short = $_POST['short'];
      $new_password = md5($_POST['new_password']);
      $conf_password = md5($_POST['conf_password']);
      
      $query = "SELECT password FROM account WHERE id_user = '$id_user'";
      $result = mysqli_query($conn, $query);
      
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $db_firstName = $row['first_name'];
        $db_lastName = $row['last_name'];
        $db_phone = $row['phone'];
        $db_title = $row['title'];
        $db_short = $row['short'];
        $db_password = $row['password'];
        if ($phone == $db_phone|| $title == $db_title || $short == $db_short) {
          $query = "UPDATE account SET password = '$new_password' WHERE id_user = '$id_user'";
          $query2 = "UPDATE account SET first_name = '$firstName' WHERE id_user = '$id_user'";
          $query3 = "UPDATE account SET last_name = '$lastName' WHERE id_user = '$id_user'";
          $query4 = "UPDATE account SET phone = '$phone' WHERE id_user = '$id_user'";
          $query5 = "UPDATE account SET title = '$title' WHERE id_user = '$id_user'";
          $query6 = "UPDATE account SET short = '$short' WHERE id_user = '$id_user'";
          if (mysqli_query($conn, $query) || mysqli_query($conn, $query2) || mysqli_query($conn, $query3) || mysqli_query($conn, $query4) || mysqli_query($conn, $query5) || mysqli_query($conn, $query6)) {
            echo "Your Data has been successfully updated.";
            header("location: ".BASE_URL."index.php?page=user-access/profile&notif=success");
          } else {
            echo "Error updating Data: " . mysqli_error($conn);
          }
        } else {
        // echo "The current data you entered is incorrect.";
        }
      } else {
      echo "Error retrieving current data: " . mysqli_error($conn);
      }
    }
    else {
      die ("Error. No ID Selected! ");    
    }