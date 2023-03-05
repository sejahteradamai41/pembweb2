<?php

$customer = $_GET['customer'];
$radiobuttons = $_GET['radio'];
$jumlah = $_GET['Jumlah'];


if($_GET['radio'] == 'TV' && $_GET['Jumlah']){
    $total_harga = 4200000 * $_GET['Jumlah'];
    

} elseif($_GET['radio'] == 'Kulkas'  && $_GET['Jumlah']){
    $total_harga= 3100000 * $_GET['Jumlah'];
    

} elseif($_GET['radio'] == 'Mesin cuci'  && $_GET['Jumlah']){
    $total_harga=3800000 * $_GET['Jumlah'];
    
}

?>