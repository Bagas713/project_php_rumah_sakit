<?php 
 include_once("function/koneksi.php");
 mysqli_select_db($conn, "rumahsakit");

 $filename="data-kategori-".date('Ymd').".xlsx";

 header("Content-Type: application/vnd-ms-excel"); 
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    $out=array();
 $sql=mysqli_query("SELECT * FROM kategori_ill");
 while($data=mysqli_fetch_assoc($sql)) $out[]=$data;

 $show_coloumn = false;
 foreach($out as $record) {
 if(!$show_coloumn) {
 //menampilkan nama kolom di baris pertama
 echo implode("\t", array_keys($record)) . "\n";
 $show_coloumn = true;
 }
 // looping data dari database
 echo implode("\t", array_values($record)) . "\n";
 } 
 exit;
?>