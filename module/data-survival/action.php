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

    $datas = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien = '$id_pasien'");
    while($dta = mysqli_fetch_assoc($datas)) {
        $namaLengkap = $dta['nama_lengkap'];
    }

    if($type_ill == "Anus") {
        $datasss = mysqli_query($conn, "SELECT tanggal_biopsi FROM patologi_anus WHERE dp_anus_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($datasss)) {
            $tanggalBiopsi = $dta['tanggal_biopsi'];
        }
    }
    else if($type_ill == "Duodenum-Jejujum-Ileum") {
        $datasss = mysqli_query($conn, "SELECT tanggal_biopsi FROM patologi_duodenum WHERE dp_duodenum_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($datasss)) {
            $tanggalBiopsi = $dta['tanggal_biopsi'];
        }
    }
    else if($type_ill == "Kolon-Rektum") {
        $datasss = mysqli_query($conn, "SELECT tanggal_biopsi FROM patologi_kolon WHERE dp_kolon_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($datasss)) {
            $tanggalBiopsi = $dta['tanggal_biopsi'];
        }
    }
    else if($type_ill == "Esofagus") {
        $datasss = mysqli_query($conn, "SELECT tanggal_biopsi FROM patologi_esofagus WHERE dp_esofagus_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($datasss)) {
            $tanggalBiopsi = $dta['tanggal_biopsi'];
        }
    }
    else if($type_ill == "Gaster") {
        $datasss = mysqli_query($conn, "SELECT tanggal_biopsi FROM patologi_gaster WHERE dp_gaster_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($datasss)) {
            $tanggalBiopsi = $dta['tanggal_biopsi'];
        }
    }
    else if($type_ill == "GIST") {
        $datasss = mysqli_query($conn, "SELECT tanggal_biopsi FROM patologi_gist WHERE dp_gist_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($datasss)) {
            $tanggalBiopsi = $dta['tanggal_biopsi'];
        }
    }
    else if($type_ill == "Pankreas") {
        $datasss = mysqli_query($conn, "SELECT tanggal_biopsi FROM patologi_pankreas WHERE dp_pankreas_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($datasss)) {
            $tanggalBiopsi = $dta['tanggal_biopsi'];
        }
    }
    else if($type_ill == "Hepatobilier") {
        $datasss = mysqli_query($conn, "SELECT tanggal_biopsi FROM patologi_hepatobilier WHERE dp_hepatobilier_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($datasss)) {
            $tanggalBiopsi = $dta['tanggal_biopsi'];
        }
    }

    $tanggalBiopsi = $tanggalBiopsi;

    if($button == "Save") {
        if($ds_status == "Meninggal"){

            function hitung_umur($tanggalBiopsi){
                $birthDate = new DateTime($tanggalBiopsi);
                $tanggal_meninggal = new DateTime($tanggal_meninggal);
                if ($birthDate > $tanggal_meninggal) { 
                    exit("0 tahun 0 bulan 0 hari");
                }
                $y = $tanggal_meninggal->diff($birthDate)->y;
                $m = $tanggal_meninggal->diff($birthDate)->m;
                $d = $tanggal_meninggal->diff($birthDate)->d;
                return $y." tahun ".$m." bulan ".$d." hari";
            }
        
            $masa_hidup = hitung_umur($tanggalBiopsi);
        } else {
            $masa_hidup = "Hidup";
        }

        mysqli_query($conn, "INSERT INTO data_survival (ds_status, tanggal_meninggal, tanggal_rekurensi, masa_hidup, ds_id_pasien, ds_nama) 
                                            VALUES ('$ds_status', '$tanggal_meninggal', '$tanggal_rekurensi', '$masa_hidup', '$id_pasien', '$namaLengkap' )"); 

        $data = mysqli_query($conn, "SELECT id_data_survival FROM data_survival WHERE ds_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_data_survival = $dta['id_data_survival'];
        }

        $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
        $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;

        if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        }
        else if($id_klinis && $id_patologi && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");    
        } 
        else if($id_klinis && $id_patologi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_survival=$id_data_survival");
        } 
        else if($id_klinis && $id_data_terapi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        } 
        else if($id_patologi && $id_data_terapi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        } 
        else if($id_klinis && $id_patologi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_survival=$id_data_survival");
        } 
        else if($id_klinis && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        }
        else if($id_klinis && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_survival=$id_data_survival");
        }
        else if($id_patologi && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        }
        else if($id_patologi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_survival=$id_data_survival");
        }
        else if($id_data_survival && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        }
        else if($id_klinis) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_survival=$id_data_survival");
        } 
        else if($id_patologi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_survival=$id_data_survival");
        }
        else if($id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        }
        else {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_data_survival=$id_data_survival");
        }
    } else if($button == "Update") {
        if($ds_status == "Meninggal"){
            function hitung_umur($tanggalBiopsi){
                $birthDate = new DateTime($tanggalBiopsi);
                $tanggal_meninggal = new DateTime($tanggal_meninggal);
                if ($birthDate > $tanggal_meninggal) { 
                    exit("0 tahun 0 bulan 0 hari");
                }
                $y = $tanggal_meninggal->diff($birthDate)->y;
                $m = $tanggal_meninggal->diff($birthDate)->m;
                $d = $tanggal_meninggal->diff($birthDate)->d;
                return $y." tahun ".$m." bulan ".$d." hari";
            }
        
            $masa_hidup = hitung_umur($tanggalBiopsi);
        } else {
            $masa_hidup = "Hidup";
        }               
        
        mysqli_query($conn, "UPDATE data_survival SET ds_status = '$ds_status',
                                                            tanggal_meninggal = '$tanggal_meninggal',
                                                            tanggal_rekurensi = '$tanggal_rekurensi',
                                                            masa_hidup = '$masa_hidup' WHERE ds_id_pasien = '$id_pasien'");
        
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
        }
        else if($id_klinis && $id_patologi && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");    
        } 
        else if($id_klinis && $id_patologi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_survival=$id_data_survival");
        } 
        else if($id_klinis && $id_data_terapi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        } 
        else if($id_patologi && $id_data_terapi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        } 
        else if($id_klinis && $id_patologi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_survival=$id_data_survival");
        } 
        else if($id_klinis && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        }
        else if($id_klinis && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_survival=$id_data_survival");
        }
        else if($id_patologi && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        }
        else if($id_patologi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_survival=$id_data_survival");
        }
        else if($id_data_survival && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        }
        else if($id_klinis) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_survival=$id_data_survival");
        } 
        else if($id_patologi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_survival=$id_data_survival");
        }
        else if($id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        }
        else {
            header("location:".BASE_URL."index.php?page=module/data-survival/form&id_pasien=$id_pasien&type_ill=$type_ill&id_data_survival=$id_data_survival");
        }
    }

?>