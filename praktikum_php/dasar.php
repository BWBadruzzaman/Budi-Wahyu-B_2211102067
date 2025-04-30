<?php echo "Hello, PHP!"; ?>
<br>
<?php $nama = "Budi Wahyu Badruzzaman";
$umur = 20;
$nim= "2211102067";
echo "Halo, nama saya $nama, NIM: $nim, dan saya berumur $umur tahun.";
?> 

<br>

<?php $a = 10;
$b = 5;
echo $a + $b . "Ini Penjumlahan"; // Penjumlahan echo $a - $b; 
echo "<br>";
echo $a - $b . "Ini Pengurangan"; // Pengurangan echo $a * $b; 
echo "<br>";
echo $a * $b; // Perkalian echo $a / $b; 
echo "<br>";
echo $a / $b; // Pembagian echo $a % $b; 
echo "<br>";
echo $a % $b; // Modulus 
?>

<br>
<br>

<?php
$nilai = 80;
if ($nilai >= 75) { //Kondisi IF-Else
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
?>

<br>
<br>

<?php
$hari = "Senin";
 
switch ($hari) { //Kondisi Switch Case
    case "Senin":
        echo "Hari ini Senin";
        break;
    case "Selasa":
        echo "Hari ini Selasa";
        break;
    default:
        echo "Hari tidak diketahui";
}
?>

<br>
<br>

<?php for ($i = 1; $i <= 5; $i++) { //perulangan for
    echo "Angka ke-$i <br>";
}
?>

<br>

<?php
$x = 1;
while ($x <= 5) { //perulangan while
    echo "Angka $x <br>";
    $x++;
}
?>

<br>

<?php
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) { //perulangan foreach untuk array
    echo "Buah: $b <br>";
}
?>

<br>

<?php $hewan = ["Kucing", "Anjing", "Burung"]; echo $hewan[0]; // Output: Kucing ?>

<br>