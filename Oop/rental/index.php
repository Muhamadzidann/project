<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor Form</title>
</head>
<style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    table {
        background-color: #ffffff;
        border-collapse: collapse;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        margin: 0;
    }
    td {
        padding: 10px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input, select {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
    }
    button:hover {
        background-color: #45a049;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            background-color: gold;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin: 0;
        }
        td {
            padding: 14px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            margin-left: 15px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
    
<body>
    <form action="" method="post">
        <table border="1" align="center" cellpadding="10">
            <tr>
                <td colspan="2" align="center"><h2>Rental Form</h2></td>
            </tr>
            <tr>
                <td><label for="member">Member Name:</label></td>
                <td><input type="text" name="member" id="member" required></td>
            </tr>
            <tr>
                <td><label for="jenis">Type of Bike:</label></td>
                <td>
                    <select name="jenis" id="jenis" required>
                        <option value="Scooter">Scooter</option>
                        <option value="Sport">Sport</option>
                        <option value="SportTouring">SportTouring</option>
                        <option value="Cross">Cross</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="waktu">Rental Duration (days):</label></td>
                <td><input type="number" name="waktu" id="waktu" min="1" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit" value="z" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>

    <?php 
    include 'rental.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $member = $_POST['member'];
        $jenis = $_POST['jenis'];
        $waktu = $_POST['waktu'];
    
        $rental = new Rental();
        $rental->member = $member;
        $rental->jenis = $jenis;
        $rental->waktu = $waktu;
    
        // meng set harga motor nya
        $rental->setHarga(100000, 200000, 300000, 400000); 
    
        $rental->pembayaran();
    }
  
    ?>
    
    
</body>
</html> 