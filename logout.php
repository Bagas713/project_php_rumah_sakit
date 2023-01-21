<?php

    session_start();

    unset($_SESSION['id_user']);
    unset($_SESSION['username']);
    unset($_SESSION['level']);

    header("location: index.php?page=user-access/login");

?>