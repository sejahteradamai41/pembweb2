<?php
class buah{

   public $namabuah;
   public $warnakulit;
   public $rasa;
   public $aroma;

   function __construct ($nama, $warna, $taste, $bau)
   {
        $this->namabuah = $nama;
        $this->warnakulit = $warna;
        $this->rasa = $taste;
        $this->rasa = $taste;
   }

   function tumbuh()
   {
    return "buah $this->namabuah itu  tumbuh !";
   }
   function busuk()
   {
    return "buah $this->namabuah itu  busuk !";
   }
}
$objek = new buah("sirsak", "merah","manis","harum");
echo $objek->tumbuh();
echo "<br>";
echo $objek->busuk();
