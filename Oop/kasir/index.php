
<?php
require_once "logika.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

       body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #e9ecef;
    margin: 0;
    padding: 20px;
    color: #495057;
}

.mid {
    text-align: center;
    margin-bottom: 20px;
}

.mid h1 {
    color: #17a2b8;
    font-size: 2.5em;
}

form {
    background-color: gold;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: 0 auto 20px;
}

form div {
    margin-bottom: 20px;
}

form input {
    width: 100%;
    padding: 15px;
    font-size: 1em;
    border: 1px solid #ced4da;
    border-radius: 4px;
    box-sizing: border-box;
}

form button {
    width: 55%;
    padding:10px;
    margin-left: 100px;
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 100px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 1.1em;
}

form button:hover {
    background-color: #0056b3;
    margin-right: 50px;
}

table {
    width: 55%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-left: 320px;
    margin-bottom: 15px;
    background-color: gold;
}


    </style>
</head>
<body>
    <div class="mid">
        <h1>Masukan Belajaan</h1>
    </div>
    <form action="" method="post">
        <div class="barang">
            <input type="text" name="barang" placeholder="Masukan Barang" required>
        </div>
        <div class="harga">
            <input type="number" name="harga" placeholder="Harga" required>
        </div>
        <div class="jumlah">
            <input type="number" name="jumlah" placeholder="Jumlah" required>
        </div>
        <div class="btn_tambah">
            <button type="submit" name="tambah">Tambah</button>
        </div>
    </form>
    <br>
    <table border="1" cellpadding="6" cellspacing="6">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Hapus</th>
        </tr>
        <?php
        $i = 1;
        $total_belanja = 0;
        $item_exists = false;
        foreach ($_SESSION['pembelajaan'] as $belan => $b) :
            $total_belanja += $b['harga'] * $b['jumlah'];
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= htmlspecialchars($b['barang']) ?></td>
            <td><?= "Rp." . number_format($b['harga'], 0, ',', '.') ?></td>
            <td><?= htmlspecialchars($b['jumlah']) ?></td>
            <td><?= number_format($b['harga'] * $b['jumlah'], 0, ',', '.') ?></td>
            <td>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="hapus_key" value="<?= $belan ?>">
                    <button type="submit" name="hapus">Hapus</button>
                </form>    
            </td>
        </tr>
        <?php $i++; endforeach; ?>
        <tr>
            <td colspan="5"> Total Barang</td>
            <td><?= count($_SESSION['pembelajaan']) ?></td>
        </tr>
        <tr>
            <td colspan="5">Total Belanja</td>
            <td><?= "Rp." . number_format($total_belanja, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <td colspan="6">
                <form action="" method="post">
                    <button type="submit" name="bayar">Bayar</button>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>