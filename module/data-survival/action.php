<?php
    include_once("../../function/koneksi.php");
    include_once("../../function/helper.php");

    $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
    $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
    
    $ds_status = $_POST['ds_status'];
    $tanggal_meninggal = $_POST['tanggal_meninggal'];
    $tanggal_rekurensi = $_POST['tanggal_rekurensi'];
    $masa_hidup = $_POST['masa_hidup'];
    $button = $_POST['button'];

    $datas = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien = '$id_pasien'");
    while($dta = mysqli_fetch_assoc($datas)) {
        $id_data_survivals = $dta['id_data_survival'];
    }

    if($button == "Save") {
        mysqli_query($conn, "INSERT INTO data_survival (ds_status, tanggal_meninggal, tanggal_rekurensi, masa_hidup, ds_id_pasien, ds_nama) 
                                            VALUES ('$ds_status', '$tanggal_meninggal', '$tanggal_rekurensi', '$masa_hidup', '$id_pasien', '$type_ill' )"); 

        $data = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_data_survival = $dta['id_data_survival'];
        }

        $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
        $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
        $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : $id_data_survival;

        if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");

        } else if($id_klinis && $id_patologi && $id_data_terapi) {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi");

        } else if($id_klinis && $id_patologi) {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi");

        } else if($id_klinis) {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis");

        } else {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill");
        }

        // header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_klinis=$id_klinis&id_data_survival=$id_data_survival");

        // $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : $id_klinis_esofagus;

        // header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis_esofagus=$id_klinis_esofagus&id_klinis=$id_klinis");
    } else if($button == "Update") {
        mysqli_query($conn, "UPDATE data_survival SET ds_status = '$ds_status',
                                                            tanggal_meninggal = '$tanggal_meninggal',
                                                            tanggal_rekurensi = '$tanggal_rekurensi',
                                                            masa_hidup = '$masa_hidup' WHERE id_data_survival = '$id_data_survivals'");
        
        $data = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_data_survival = $dta['id_data_survival'];
        }

        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
        $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
        $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
        $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : $id_data_survival;

        if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");

        } else if($id_klinis && $id_patologi && $id_data_terapi) {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi");

        } else if($id_klinis && $id_patologi) {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi");

        } else if($id_klinis) {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis");

        } else {

            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill");
        }
    }

?>