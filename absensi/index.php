<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Kehadiran</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="welcome-screen">
        <h1>Selamat Datang!</h1>
        <p>Form Absensi Anda Siap Digunakan</p>
    </div>

    <div class="container hidden">
        <h1>Form Absensi</h1>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Masukkan Nama Anda" required>
            <button type="submit" name="submit">Absen Sekarang</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            include 'database.php';
            $name = $conn->real_escape_string($_POST['name']);
            $time = date('Y-m-d H:i:s');

            // Insert data ke tabel attendance
            $sql = "INSERT INTO attendance (name, time) VALUES ('$name', '$time')";
            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>Absensi berhasil dicatat!</p>";
            } else {
                echo "<p class='error'>Gagal mencatat absensi: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>
