<?php

    require './belajar_function.php';

    //fungsi lebih global, bisa digunakan dimana mana
    class User {
        public $name;
        private $gender = "None";

        //method adalah fungsi yang ada di dalam kelas 
        public function setGender($gender_name){
            $this -> gender = $gender_name;
        }
        public function getGender() {
            printNumB();
            return $this -> gender;
        }
    }
$indah = new User;
$indah -> name = "Nur Indah Fidia Wati";
$indah -> setGender("Female");
//echo($indah -> getGender());
$indah -> getGender();

?>
