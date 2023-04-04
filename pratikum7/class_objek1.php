<?php
class mamalia
{
    public $jumlahkaki;
    public $berekor;
    function meyusui ()
    {
        return "hewan meyusui";
    }

    function melahirkan()
    {
        return "hewan melahirkan";
    }
}
$obejekmamalia = new Mamalia();
echo $obejekmamalia->melahirkan();
echo "<br>";
echo $obejekmamalia->menyusui();
echo $obejekmamalia->jumlahkaki;