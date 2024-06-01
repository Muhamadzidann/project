<?php
session_start();

$students = [];
if (isset($_SESSION['students'])) {
    $students = $_SESSION['students'];
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $rayon = $_POST['rayon'];

    $student_data = [
        'nama' => $nama,
        'nis' => $nis,
        'rayon' => $rayon
    ];

    $students[] = $student_data;

    $_SESSION['students'] = $students;
}

if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    unset($students[$index]);
    $_SESSION['students'] = $students;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Isi Data Siswa</title>
</head>
 
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 250px;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            margin-right: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: #dc3545;
        }

        a:hover {
            color: #c82333;
        }
    </style>

<body>
    <div>
        <div>
            <h2>Form Isi Data Siswa</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                    <div>
                        <label for="nama">Nama :</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukan nama..." required>
                    </div>
                    <div>
                        <label for="nis">NIS :</label>
                        <input type="number" id="nis" name="nis" placeholder="Masukan NIS..." required>
                    </div>
                    <div>
                        <label for="rayon">Rayon :</label>
                        <input type="text" id="rayon" name="rayon" placeholder="Masukan rayon..." required>
                    </div>
                </div>
                <div>
                    <button type="submit" name="submit">Kirim</button>
                    <button type="submit" name="reset">Reset</button>
                </div>
            </form>
        </div>

        <h2>Data Siswa:</h2>
        <ul>
            <?php foreach ($students as $index => $student) : ?>
                <li>
                    <?php echo $student['nama'] . ' - ' . $student['nis'] . ' - ' . $student['rayon']; ?>
                    <a href="<?php echo $_SERVER['PHP_SELF'] . '?delete=' . $index; ?>">Hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>