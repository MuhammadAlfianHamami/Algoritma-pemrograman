<?php
$nim = "I.110186";
$nama = 'Muhammad Encep';
$umur = 35;
$nilai = 92.75;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur;
print "<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>
Save : coba2.php
<?php
$gaji = 8000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);

echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji Bersih = Rp. $thp";
?>