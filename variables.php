<?php
$tanggalLahir = "2005-08-08";
$tanggalSekarang = new DateTime();
$tanggalLahirObj = new DateTime($tanggalLahir);
$selisih = $tanggalSekarang->diff($tanggalLahirObj);

$ageYears = $selisih->y;
$ageMonths = $selisih->m;
$ageDays = $selisih->d;

$name = "Leonard Widjaja";
$sex = "male";
$gpa = 3.94;
$isStudent = true;

echo "Name: " . $name . "<br>";
echo "Age: " . $ageYears . " years, " . $ageMonths . " months, and " . $ageDays . " days old<br>";
echo "Sex: " . $sex . "<br>";
echo "GPA: " . $gpa . "<br>";
echo "Is student: " . ($isStudent ? "true" : "false") . "<br>";
?>
