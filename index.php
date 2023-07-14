<?php

class Movie {
    public $title;
    public $originaLenguage;
    public $minuts;
    public $genere;

    function __construct(String $_title, String $_originaLenguage, Int $_minuts, String $_genere){
        $this->title = $_title;
        $this->originaLenguage = $_originaLenguage;
        $this->minuts = $_minuts;
        $this->genere = $_genere;

    }

    public function getTitle(){
        return $this->title;
    }
    public function getOriginaLenguage(){
        return $this->originaLenguage;
    }
    public function getMinuts(){
        return $this->minuts;
    }
    public function getGenere(){
        return $this->genere;
    }
}

$troy = new Movie ('troy', 'english', 90, 'fantasy');
echo $troy-> getTitle();
echo $troy-> getOriginaLenguage();
echo $troy-> getMinuts();
echo $troy-> getGenere();
var_dump($troy);

$titanic = new Movie ('titanic', 'english', 120, 'drama');
echo $titanic-> getTitle();
echo $titanic-> getOriginaLenguage();
echo $titanic-> getMinuts();
echo $titanic-> getGenere();
var_dump($titanic);