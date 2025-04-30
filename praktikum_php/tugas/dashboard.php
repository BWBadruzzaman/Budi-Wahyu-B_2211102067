<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
  <p><a href="logout.php">Logout</a></p>

  <hr>
  <h3>Form Cek Umur</h3>
  <form method="POST">
    Nama: <input type="text" name="nama" required><br>
    Umur: <input type="number" name="umur" required><br>
    <input type="submit" value="Kirim">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = htmlspecialchars($_POST['nama']);
      $umur = (int)$_POST['umur'];

      if ($umur >= 18) {
          echo "<p><strong>$nama Dewasa</strong></p>";
      } else {
          echo "<p><strong>$nama Belum Dewasa</strong></p>";
      }
  }
  ?>
</body>
</html>
