<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Harga Dengan Konsep OOP</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: gold;
            padding: 12px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
    
        div {
            margin-bottom: 15px;
        }
    
        label {
            margin-right: 10px;
            flex: 1;
        }
    
        input, select {
            flex: 2;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .form-group {
            display: flex;
            align-items: center;
        }
    </style>


<body>
    <form action="" method="post">
        <div style = "display: flex;">
           <label for ="liter">Masukkan Jumlah Liter Pembelian : </label>
           <input type="number" name="liter" id="liter" required>
        </div>
        <div style = "display: flex;">
            <label for="jenis">Pilih Jenis Bahan Bakar</label>
            <select name="jenis" required>
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">SV Power</option>
                <option value="SVPowerDiesel">SV Power Diesel</option>
                <option value="SVPowerNitro">SV Power Nitro</option>
            </select>
    
        </div>
        <button type="submit" name ="beli">Beli</button>
    </form>

    <?php
    // panggil file nya 
    require 'bbm.php';
    // baru dibuka, langsung set harganya
    $logic = new Pembelian();
    $logic->setHarga(10000, 15000, 18000, 20000);
    // kalau sudah piks beli, jalanin
    if (isset($_POST['beli'])){
        // isi attribute public pada class sesuai dengan isian formnya
        $logic->JenisYangDipilih = $_POST['jenis'];
        $logic->totalLiter = $_POST['liter'];
        // abis kirim nilai form, proses harganya
        $logic->totalHarga();
        // cetak bukti
        $logic->cetakBukti();
    }
    ?>
</body>
</html>