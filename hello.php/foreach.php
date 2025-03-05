<?php
// ==============================================
// Nama  : Billy Aditya Amanda
// NIM   : 102022300252
// Kelas : SI4707
// ==============================================

$mahasiswa = ['Mahasiswa 1', 'Mahasiswa 2', 'Mahasiswa 3', 'Mahasiswa 4', 'Mahasiswa 5'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Foreach dalam PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <ul>
            <?php
            foreach ($mahasiswa as $row) {
                echo "<li>$row</li>";
            }
            ?>
        </ul>
        <hr>
        <p class="footer">Dibuat oleh: <strong>Billy Aditya Amanda</strong> - 102022300252 - SI4707</p>
    </div>
</body>
</html>