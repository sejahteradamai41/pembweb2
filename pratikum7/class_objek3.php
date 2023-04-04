<?php
class motor 
{
    public $merk;
    public $cc;
    public $transmisi;

    function jalan()
    {
        return "merk motor  $this->merk berjalan di jalan raya";
    }
    function turing()
    {
        return "motor $this->merk adalah $this->cc cc";
    }
    function ngerem()
    {
        return "bisa ngerem";
    }
    function ngegas()
    {
        return "motor $this->merk ini ngegas";
    }
}
