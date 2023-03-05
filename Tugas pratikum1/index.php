<?php

// ini sebuah komentar
// *ini sebuah komentar

// echo "Hello World <br>";
// print_r("Dela cantik <br>");
// var_dump("Kuliah di STTNF");

// // Membuat variable user
// $nama = "Dela Cantik";
// $umur = 18;
// $berat = 40.1;
// $mahasiswa = true;

// echo "Nama Saya adalah $nama <br>";
// echo "Umur saya adalah $umur tahun <br>";
// echo "berat badan $berat kg ";

// // Membuat variable sistem
// echo "Dokument root " . $_SERVER["DOCUMENT_ROOT"];
// echo "Nama File " . $SERVER ['PHP_SELF'];

// Membuat variable konstanta
// define("PHI", 3.14);
// $jari = 8;
// $luas = PHI * $jari * $jari ;
// $keliling = 2 * PHI * $jari;

// echo "Luas lingkaran adalah = $jari = $luas <br>";
// echo "keliling lingkaran adalah $keliling";

// Membuat Array
$programs = ["PHP", "Javascript", "HTML", "CSS"];
// echo $programs [0];
// echo count($programs);
// $programs[] = "Mysql";
// echo count($programs);

// unset($programs[0]);
// echo "<br>" . $programs[0];

echo "<ol>";
foreach($programs as $program){
    echo "<li> $program </li>";
}
echo "</ol>";


?>