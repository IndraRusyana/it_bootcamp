<?php

// echo berfungsi mencetak karakter
// variabel berfungsi untuk menyimpan nilai
// string = karakter;
// integer = bilangan bulat untuk operasi
// float = bilangan desimal
// boolean = true or false
$nama = 'Indra Rusyana';
$umur = 21;
$nilai = 40;
$menikah = false;
$age = 30;
$a = 0;

echo 'Nama saya '. $nama . ' umur '. $umur . ' nilai ' . $nilai . ' menikah ' . $menikah . '<br>';

if ($nilai >= 90) {
    echo 'Nilai A<br>';
} elseif ($nilai >= 80 && $nilai < 90) {
    echo 'Nilai B<br>';
} elseif ($nilai >= 70 && $nilai < 80) {
    echo 'Nilai C<br>';
} elseif ($nilai >= 60 && $nilai < 70) {
    echo 'Nilai D<br>';
} else {
    echo 'Nilai E<br>';
}

while ($a <= 10) {
    echo $a;
    $a++;
}

echo '<br>';

for ($i=0; $i < 10; $i++) { 
    echo $i;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Bootcamp</title>
</head>
<body>
    <!-- <h1>Nama Saya <?= $nama; ?></h1>  -->
</body>
</html>