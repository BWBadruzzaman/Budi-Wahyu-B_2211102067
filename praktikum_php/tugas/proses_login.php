<?php
session_start();

$user = "BWBadruzzaman";
$pass = "2211102067";

if ($_POST['username'] == $user && $_POST['password'] == $pass) {
  $_SESSION['username'] = $user;
  header("Location: dashboard.php");
} else {
  echo "Login Gagal! <a href='login.php'>Coba lagi</a>";
}
?>
