<?php

session_start();

if(!isset($_SESSION['pembelajaan'])){
    $_SESSION['pembelajaan'] = array();
}

if(isset($_POST['tambah'])){
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;
    if($barang == "" && $harga == "" &&  $jumlah ==""){
        echo"belajaan kosong";
    }else{
        $nemu = false;
        foreach($_SESSION['pembelajaan'] as &$item){
            if($item['barang'] === $barang){
                $item['jumlah'] += $jumlah;
                $nemu = true;
                break;
            }
        }

    }

    if(!$nemu){
        $belajaan= array(
            'barang' => $barang,
            'harga' => $harga,
            'jumlah' => $jumlah
        );
        array_push($_SESSION['pembelajaan'] , $belajaan);

    }
    
}

if(isset($_POST['hapus'])){
    if(isset($_POST['hapus_key'])){
        $belan = $_POST['hapus_key']; // ngambil kunci dari form
        unset($_SESSION['pembelajaan'][$belan]); // nghapus data sesuai kunci
        header('Location: ' . $_SERVER['PHP_SELF']); // Redirect kembali ke halaman ini setelah penghapusan
        exit();
    }
}

if (isset($_POST['bayar'])) {
    if (empty($_SESSION['pembelajaan'])) {
        echo "Isi belanjaan dulu ngab";
    } else {
        header("Location: bayar.php");
        exit();
    }
}