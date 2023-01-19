<?php

    session_start();

    unset($_SESSION['status_login']);
    unset($_SESSION['id_user']);
    unset($_SESSION['username']);

    header("location:index.php?page=user-access/login");

?>