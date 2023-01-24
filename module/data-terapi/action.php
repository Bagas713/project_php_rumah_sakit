<?php
    include_once("../../function/koneksi.php");
    include_once("../../function/helper.php");

    $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : 'id not found';
    $type_ill = isset($_GET['type_ill']) ? $_GET['type_ill'] : 'type ill not found';
    
    $terapi1 = $_POST['terapi_1'];
    $ketTerapi1 = $_POST['ket_terapi_1'];
    $terapi2 = $_POST['terapi_2'];
    $ketTerapi2 = $_POST['ket_terapi_2'];
    $terapi3 = $_POST['terapi_3'];
    $ketTerapi3 = $_POST['ket_terapi_3'];
    $terapi4 = $_POST['terapi_4'];
    $ketTerapi4 = $_POST['ket_terapi_4'];
    $terapi5 = $_POST['terapi_5'];
    $ketTerapi5 = $_POST['ket_terapi_5'];
    $button = $_POST['button'];

    $datas = mysqli_query($conn, "SELECT nama_lengkap FROM data_pasien WHERE id_pasien = '$id_pasien'");
    while($dta = mysqli_fetch_assoc($datas)) {
        $namaLengkap = $dta['nama_lengkap'];
    }

    if($button == "Save") {
        mysqli_query($conn, "INSERT INTO data_terapi (type_case, terapi_1, ket_terapi_1, terapi_2, ket_terapi_2, terapi_3, ket_terapi_3, terapi_4, ket_terapi_4, terapi_5, ket_terapi_5, dt_id_pasien) VALUES ('$type_ill','$terapi1', '$ketTerapi1', '$terapi2', '$ketTerapi2', '$terapi3', '$ketTerapi3', '$terapi4', '$ketTerapi4', '$terapi5', '$ketTerapi5', '$id_pasien')"); 

        $data = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_data_terapi = $dta['id_data_terapi'];
        }

        // $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : $id_data_terapi;
        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
        $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
        $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

        if($id_klinis && $id_patologi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        } else if($id_klinis && $id_patologi) {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi");
        } else if($id_klinis) {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi");
        } else if($id_patologi) {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi");
        } else if($id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_data_survival=$id_data_survival&id_data_terapi=$id_data_terapi");
        } else {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_data_terapi=$id_data_terapi");
        }
    } else if($button == "Update") {
        mysqli_query($conn, "UPDATE data_terapi SET terapi_1 = '$terapi1',
                                                    ket_terapi_1 = '$ketTerapi1',
                                                    terapi_2 = '$terapi2',
                                                    ket_terapi_2 = '$ketTerapi2',
                                                    terapi_3 = '$terapi3',
                                                    ket_terapi_3 = '$ketTerapi3',
                                                    terapi_4 = '$terapi4',
                                                    ket_terapi_4 = '$ketTerapi4',
                                                    terapi_5 = '$terapi5',
                                                    ket_terapi_5 = '$ketTerapi5' WHERE dt_id_pasien = '$id_pasien'");
        
        $data = mysqli_query($conn, "SELECT id_data_terapi FROM data_terapi WHERE dt_id_pasien = '$id_pasien'");
        while($dta = mysqli_fetch_assoc($data)) {
            $id_data_terapi = $dta['id_data_terapi'];
        }

        $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : $id_data_terapi;
        $id_klinis = isset($_GET['id_klinis']) ? $_GET['id_klinis'] : false;
        $id_patologi = isset($_GET['id_patologi']) ? $_GET['id_patologi'] : false;
        $id_data_terapi = isset($_GET['id_data_terapi']) ? $_GET['id_data_terapi'] : false;
        $id_data_survival = isset($_GET['id_data_survival']) ? $_GET['id_data_survival'] : false;

        if($id_klinis && $id_patologi && $id_data_terapi && $id_data_survival) {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi&id_data_survival=$id_data_survival");
        } else if($id_klinis && $id_patologi && $id_data_terapi) {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi");
        } else if($id_klinis && $id_patologi) {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_patologi=$id_patologi&id_data_terapi=$id_data_terapi");
        } else if($id_klinis) {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_klinis=$id_klinis&id_data_terapi=$id_data_terapi");
        } else {
            header("location:".BASE_URL."index.php?page=module/data-terapi/form&id_pasien=$id_pasien&type_ill=$type_ill&id_data_terapi=$id_data_terapi");
        }
    }

?>