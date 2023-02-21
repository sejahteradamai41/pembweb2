<?php
$arrayBuah = ["mangga , belimbing , semangka , jeruk , pepaya"];

//menggurutkan array
sort($arrayBuah);

//menghapus nilain yang paling belakang
array_pop($arrayBuah);

//menghapus spesifik
unset($arrayBuah[1]);

//menghapus  value array yang paling belakang
arra_pust($arrayBuah,"Apel");

//menghapus velue  array yang paling depan
array_shift($arrayBuah);

//menambah value array yang di depan
array_unsift($arrayBuah,"durian");

foreach($arrayBuah as $buah){
    echo  $buah . "<br>";
}