

<?php

class Balok{
    private $panjang;
    private $lebar;
    private $tinggi;

    public function setPanjang($option){
        $this -> panjang = $option;
    }
    public function getPanjang(){
        return $this -> panjang;
    }
    public function setLebar($option){
        $this -> lebar = $option;
    
    }
    public function getLebar(){
        return $this -> lebar;
    }
    public function setTinggi($option){
        $this -> tinggi = $option;
    }
    public function getTinggi(){
        return $this -> tinggi;
    }
    public function getLuas(){
        $luas = 0;
        $luas = 2 * ($this -> panjang * $this -> lebar) + ($this -> panjang * $this -> tinggi) + ($this -> lebar * $this -> tinggi);
        return $luas;
    }
    public function getVolume(){
        $volume = 0;
        $volume = $this -> panjang * $this -> lebar * $this -> tinggi;
        return $volume;
        
    }
}
?>