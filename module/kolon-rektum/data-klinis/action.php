<?php
    include_once("../../../function/koneksi.php");
    include_once("../../../function/helper.php");

    $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
    $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
    
    $keluhan = $_POST['keluhan'];
    $period = $_POST['period'];
    $fam_history = $_POST['fam_history'];
    $infection_history = $_POST['infection_history'];
    $lokasi = $_POST['lokasi'];
    $kolonoskopi = $_POST['kolonoskopi'];
    $ct_scan = $_POST['ct_scan'];
    $button = $_POST['button'];

    $datass = mysqli_query($conn, "SELECT nama_lengkap FROM data_pasien WHERE id_pasien = '$id_pasien'");
    while($dta = mysqli_fetch_assoc($datass)) {
        $namaLengkap = $dta['nama_lengkap'];
    }

    $datas = mysqli_query($conn, "SELECT id_klinis_kolon FROM data_klinis_kolon WHERE dk_kolon_id_pasien = '$id_pasien'");
    while($dta = mysqli_fetch_assoc($datas)) {
        $id_klinis_kolons = $dta['id_klinis_kolon'];
    }

    if($button == "Save") {
        mysqli_query($conn, "INSERT INTO data_klinis_kolon (keluhan, period, fam_history, infection_history, lokasi, kolonoskopi, ct_scan, dk_kolon_id_pasien, dk_kolon_nama) 
                                            VALUES ('$keluhan', '$period', '$fam_history', '$infection_history', '$lokasi', '$kolonoskopi', '$ct_scan', '$id_pasien', '$namaLengkap' )"); 

        $data = mysqli_query($conn, "SELECT id_klinis_kolon FROM data_klinis_kolon WHERE dk_kolon_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_klinis_kolon = $dta['id_klinis_kolon'];
        }

        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : $id_klinis_kolon;

        header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis");
    } else if($button == "Update") {
    // $id_klinis_kolons = $_GET['id_klinis_kolon'];
        mysqli_query($conn, "UPDATE data_klinis_kolon SET keluhan = '$keluhan',
                                                period = '$period',
                                                fam_history = '$fam_history',
                                                infection_history = '$infection_history',
                                                lokasi = '$lokasi',
                                                kolonoskopi = '$kolonoskopi,
                                                ct_scan = '$ct_scan' WHERE dk_kolon_id_pasien = '$id_pasien'");

        $data = mysqli_query($conn, "SELECT id_klinis_kolon FROM data_klinis_kolon WHERE dk_kolon_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_klinis_kolon = $dta['id_klinis_kolon'];
        }

        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : $id_klinis_kolon;
        $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
        $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
        $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

        if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        } else if($id_klinis && $id_patologi && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi");
        } else if($id_klinis && $id_patologi) {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi");
        } else if($id_klinis) {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis");
        } else {
            header("location:".BASE_URL."index.php?page=module/$type_ill/data-klinis/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis");
        }
    }
?>