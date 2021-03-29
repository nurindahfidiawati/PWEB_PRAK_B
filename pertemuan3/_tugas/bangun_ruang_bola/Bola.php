

<?php

class Bola{
    private $jari_jari;

    public function setJari($option){
        $this -> jari_jari = $option;
    }
    public function getJari(){
        return $this -> jari_jari;
    }
    public function getLuas(){
        $luas = 0;
        $luas = 4 * pi() * pow($this -> jari_jari, 2);
        return $luas;
    }
    public function getVolume(){
        $volume = 0;
        $volume = 4/3 * pi() * pow($this -> jari_jari, 3);
        return $volume;
        
    }
}
?>