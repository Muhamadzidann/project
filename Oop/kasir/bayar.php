<?php
session_start();
$total_belanja = 0;
foreach ($_SESSION['pembelajaan'] as $b) {
    $total_belanja += $b['harga'] * $b['jumlah'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.mid {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.tengah {
    background-color: gold;
    padding: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    width: 300px;
    text-align: center;
}

.judul h2 {
    margin: 0;
    padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
}

.masukan p {
    margin: 20px 0;
}

.bayar input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.pember h3 {
    color: #333;
    margin: 20px 0;
}

.tbn_bayar {
    margin-right: 20px 0;
}

/* Button styles */
.tbn_bayar button {
    background-color: #28a745;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, transform 0.3s;
}

.tbn_bayar button:hover {
    background-color: #218838;
}

.tbn_bayar button:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.5);
}

.tbn_bayar button:active {
    background-color: #1e7e34;
    transform: scale(0.98);
}

a {
    display: inline-block;
    margin-top: 10px;
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.echo {
    color: red;
    font-weight: bold;
    margin: 10px 0;
}

    </style>
</head>
<body>
    <div class="mid">

        <div class="tengah">
            <div class="judul">
                <h2>Bayar Sekarang</h2>
            </div>
            <div class="masukan">
                <p>Masukan Nominal Uang</p>
            </div>
            <form action="" method="post">
                <div class="bayar">
                    <input type="number" name="bayar" placeholder="Pastikan uang nominal cukup/lebih" required>
                </div>
                <div class="pember">

                <h3>Uang yang harus Anda bayarkan adalah <?= "Rp." . number_format($total_belanja, 0, ',', '.'); ?></h3>
                </div>
                <?php 
                        if (isset($_POST['cash'])) {
                            $uang = $_POST['bayar'];
                            $bayar = $uang - $total_belanja;
                            if ($bayar < 0) {
                                echo "<p class='echo'>Uang anda kurang Rp.  $bayar !!</p>" ;
                            } else {
                                $_SESSION['kembalian'] = $bayar;
                                $_SESSION['bayar'] = $uang;
                                header("Location: bon.php");
                                exit();
                            }
                        }
                    ?>
                <div class="tbn_bayar">
                  
                    <button type="submit" name="cash">Bayar</button>
                </div>
                <a href="index.php">Kembali</a>
            </form>
        </div>
    </div>
</body>
</html>