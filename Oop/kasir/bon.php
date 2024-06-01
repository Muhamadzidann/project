<?php
    session_start();
    $total_belanja = 0;
    foreach($_SESSION['pembelajaan'] as $belan => $b){
        $total_belanja += $b['harga'] * $b['jumlah'];
        $bayar = $_SESSION['bayar'] - $total_belanja;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon</title>
    <style>
 body {
    font-family: Arial, sans-serif;
    background-color: fffffff;
    margin: 0;
    padding: 0;
}

.midd {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.mid {
    background-color: gold;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    width: 400px;
    text-align: center;
}

.container {
    text-align: left;
}

.judul h1 {
    margin: 0;
    padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
}

.random {
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
}


    </style>
</head>
<body>
    <div class="midd">
        <div class="mid">
            <div class="container">
                <div class="judul">
                    <h1>Bukti Pembayaran</h1>
                </div>
                <div class="random">
                    <div class="alon">
                        <h4>Bulan, Tanggal# <?= date("F j, Y, g:i A") ?></h4>
                    </div>
                </div>
                <hr>
                <?php 
                    foreach($_SESSION['pembelajaan'] as $belan => $b) :
                        ?>
                <div class="nama">
                    <p><?= $b['barang'] ?></p>
                    <div class="harga">
                        <p><?= $b['harga'] ?></p>
                        <div class="jumlah">
                            <p><b> x<?= $b['jumlah'] ?></b</p>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <hr>
                <div class="total">
                    <p>uang yang di bayarkan adalah </p>
                        <div class="uang">
                        <p>Rp. <?= $_SESSION['bayar'] ?></p>
                        </div>
                </div>
                <div class="total">
                    <p>total yang harga   </p>
                        <div class="uang">
                        <p>Rp. <?= number_format($total_belanja, 0, ',', '.') ?></p>
                        </div>
                </div>
                <div class="total">
                    <p>kembalian nya adalah </p>
                        <div class="uang">
                            <p>Rp. <?= $bayar?></p>
                        </div>
                </div>
                <div class="ref">
                        <p>Terrimakasih telah belanjan di toko <b>MIMI</b></p>
                            <a href="index.php" <?php session_destroy() ?>>kembali</a>
                        
                </div>
            </div>
        </div>
    </div>
</body>
</html>