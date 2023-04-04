<?PHP
Class bola{
    public $radius;
    function setRadius ($radius){ 
        $this->radius=$radius;
    }
    function getRadius(){
        $radius=$this->radius; return $radius;
    }
    function tampil($radius){
    $luas=3.14*$radius*$radius; echo "" .$luas; }
}
$bola=new bola (); 
$bola->tampil(20);
?>