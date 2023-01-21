<?php

  // include_once()

  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $phone = $_POST['phone'];
  $title = $_POST['title'];
  $short = $_POST['short'];
  $new_password = md5($_POST['new_password']);
  $conf_password = md5($_POST['conf_password']);
  

  mysqli_query($conn, "")