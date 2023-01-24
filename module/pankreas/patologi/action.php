<?php
    include_once("../../../function/koneksi.php");
    include_once("../../../function/helper.php");

    $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
    $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
    
    $tumor = $_POST['tumor'];
    $node = $_POST['node'];
    $metastasis = $_POST['metastasis'];
    $lokasi_metastasis = $_POST['lokasi_metastasis'];
    $no_patologi_biopsi = $_POST['no_patologi_biopsi'];
    $tanggal_biopsi = $_POST['tanggal_biopsi'];
    $jenis_patologi_biopsi = $_POST['jenis_patologi_biopsi'];
    $no_patologi_operasi_definitif = $_POST['no_patologi_operasi_definitif'];
    $jenis_patologi_operasi_definitif = $_POST['jenis_patologi_operasi_definitif'];
    $grade_histopatologi = $_POST['grade_histopatologi'];
    $reseksi = $_POST['reseksi'];
    $batas_reseksi_proksimal = $_POST['batas_reseksi_proksimal'];
    $batas_reseksi_distal = $_POST['batas_reseksi_distal'];
    $catatan_temuan_operasi = $_POST['catatan_temuan_operasi'];
    $button = $_POST['button'];

    $datas = mysqli_query($conn, "SELECT id_patologi_pankreas FROM patologi_pankreas WHERE dk_pankreas_id_pasien = '$id_pasien'");
    while($dta = mysqli_fetch_assoc($datas)) {
        $id_patologi_pankreass = $dta['id_patologi_pankreas'];
    }
    // mysqli_query($conn, "INSERT INTO data_klinis_esofagus 
    //                     (keluhan, period, fam_history, lokasi, esofagografi, endoskopi, ct_scan, dk_esofagus_id_pasien, dk_esofagus_nama)
    //                     VALUES ('$keluhan', '$period', '$fam_history', '$lokasi', '$esofagografi',
    //                     '$endoskopi', '$ct_scan', '$id_pasien', '$type_ill' )");


    if($button == "Save") {
        mysqli_query($conn, "INSERT INTO patologi_pankreas 
                    (tumor, node, metastasis, lokasi_metastasis, no_patologi_biopsi, tanggal_biopsi, jenis_patologi_biopsi, no_patologi_operasi_definitif, jenis_patologi_operasi_definitif, grade_histopatologi, reseksi, batas_reseksi_proksimal, batas_reseksi_distal, catatan_temuan_operasi, dk_pankreas_id_pasien, dk_pankreas_nama) 
                    VALUES 
                    ('$tumor', '$node', '$metastasis', '$lokasi_metastasis', '$no_patologi_biopsi', '$tanggal_biopsi', '$jenis_patologi_biopsi', '$no_patologi_operasi_definitif', '$jenis_patologi_operasi_definitif', '$grade_histopatologi', '$reseksi', '$batas_reseksi_proksimal', '$batas_reseksi_distal', '$catatan_temuan_operasi', '$id_pasien', '$type_ill')"); 

    } else if($button == "Update") {
    // $id_klinis_esofaguss = $_GET['id_klinis_esofagus'];
    mysqli_query($conn, "UPDATE patologi_pankreas SET tumor = '$tumor',
                                                node = '$node',
                                                metastasis = '$metastasis',
                                                no_patologi_operasi_definitif = '$no_patologi_operasi_definitif',
                                                jenis_patologi_operasi_definitif = '$jenis_patologi_operasi_definitif',
                                                grade_histopatologi = '$grade_histopatologi',
                                                reseksi = '$reseksi',
                                                batas_reseksi_proksimal = '$batas_reseksi_proksimal',
                                                batas_reseksi_distal = '$batas_reseksi_distal',
                                                catatan_temuan_operasi = '$catatan_temuan_operasi',
                                                lokasi_metastasis = '$lokasi_metastasis',
                                                no_patologi_biopsi = '$no_patologi_biopsi',
                                                jenis_patologi_biopsi = '$jenis_patologi_biopsi',
                                                tanggal_biopsi = '$tanggal_biopsi' WHERE id_patologi_pankreas = '$id_patologi_pankreass'");
    }

    $data = mysqli_query($conn, "SELECT id_patologi_pankreas FROM patologi_pankreas WHERE dk_pankreas_id_pasien = '$id_pasien'");
    while($dta = mysqli_fetch_assoc($data)) {
        $id_patologi_pankreas = $dta['id_patologi_pankreas'];
    }

    header("location:".BASE_URL."index.php?page=module/$type_ill/patologi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi_pankreas=$id_patologi_pankreas");
?>