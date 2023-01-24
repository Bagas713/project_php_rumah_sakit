<?php
    include_once("../../../function/koneksi.php");
    include_once("../../../function/helper.php");

    $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
    $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
    
    $keluhan = $_POST['keluhan'];
    $period = $_POST['period'];
    $fam_history = $_POST['fam_history'];
    $lokasi = $_POST['lokasi'];
    $upper_gi_status = $_POST['upper_gi_status'];
    $endoskopi = $_POST['endoskopi'];
    $ct_scan = $_POST['ct_scan'];
    $button = $_POST['button'];

    $datas = mysqli_query($conn, "SELECT id_klinis_gaster FROM data_klinis_gaster WHERE dk_gaster_id_pasien = '$id_pasien'");
    while($dta = mysqli_fetch_assoc($datas)) {
        $id_klinis_gasterr = $dta['id_klinis_gaster'];
    }
    // mysqli_query($conn, "INSERT INTO data_klinis_esofagus 
    //                     (keluhan, period, fam_history, lokasi, esofagografi, endoskopi, ct_scan, dk_esofagus_id_pasien, dk_esofagus_nama)
    //                     VALUES ('$keluhan', '$period', '$fam_history', '$lokasi', '$esofagografi',
    //                     '$endoskopi', '$ct_scan', '$id_pasien', '$type_ill' )");


    if($button == "Save") {
        mysqli_query($conn, "INSERT INTO data_klinis_gaster (keluhan, period, fam_history, lokasi, upper_gi_status, endoskopi, ct_scan, dk_gaster_id_pasien, dk_gaster_nama) 
                                            VALUES ('$keluhan', '$period', '$fam_history', '$lokasi', '$upper_gi_status',
                                                    '$endoskopi', '$ct_scan', '$id_pasien', '$type_ill' )"); 

        $data = mysqli_query($conn, "SELECT id_klinis_gaster FROM data_klinis_gaster WHERE dk_gaster_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_klinis_gaster = $dta['id_klinis_gaster'];
        }

        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : $id_klinis_gaster;

        header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis_gaster=$id_klinis_gaster&id_klinis=$id_klinis");

    } else if($button == "Update") {
    // $id_klinis_esofaguss = $_GET['id_klinis_esofagus'];
        mysqli_query($conn, "UPDATE data_klinis_gaster SET keluhan = '$keluhan',
                                                    period = '$period',
                                                    fam_history = '$fam_history',
                                                    lokasi = '$lokasi',
                                                    upper_gi_status = '$upper_gi_status',
                                                    endoskopi = '$endoskopi',
                                                    ct_scan = '$ct_scan' WHERE id_klinis_gaster = '$id_klinis_gasterr'");
        

        $data = mysqli_query($conn, "SELECT id_klinis_gaster FROM data_klinis_gaster WHERE dk_gaster_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_klinis_gasterr = $dta['id_klinis_gaster'];
        }

        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : $id_klinis_gaster;
        $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
        $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
        $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

        if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis_gaster=$id_klinis_gaster&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        } else if($id_klinis && $id_patologi && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis_gaster=$id_klinis_gaster&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi");
        } else if($id_klinis && $id_patologi) {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis_gaster=$id_klinis_gaster&id_klinis=$id_klinis&id_patologi=$id_patologi");
        } else if($id_klinis) {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis_gaster=$id_klinis_gaster&id_klinis=$id_klinis");
        } else {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis_gaster=$id_klinis_gaster");
        }
    }

?>