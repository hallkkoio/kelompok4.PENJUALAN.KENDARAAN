<?php
session_start();

$koneksi = mysqli_connect("localhost","root","","kendaraan");

if(isset($_POST['addnewdata'])){
    $namakendaraan = $_POST['kendaraan'];
    $deskripsi = $_POST['deskripsi'];
    $pembeli = $_POST['pembeli'];

    $addtotable = mysqli_query($koneksi, "insert into pembelian(kendaraan, deskripsi, pembeli) values('$namakendaraan', '$deskripsi', '$pembeli')");
    if($addtotable){
        echo '<script language="javascript">
                alert("message successfully sent");
                </script>';
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:index.php');
    }
}
if(isset($_POST['hapusdata'])){
    $idb = $_POST['idb'];

    $hapus = mysqli_query($koneksi, "DELETE FROM pembelian where idbeli='$idb'");
    if($hapus){
        header('location:index.php');

    } else {
        echo 'gagal';
        header('location:index.php');

    }
}
?>