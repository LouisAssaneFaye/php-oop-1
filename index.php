<?php

class Movie {
    $title;
    $originaLenguage;
    $minuts;
    $genere;

    function__construct(String $_title, String $_originaLenguage, Int $_minuts, String $_genere){
        $this->title = $_title;
        $this->originaLenguage = $_originaLenguage;
        $this->minuts = $_minuts;
        $this->genere = $_genere;

    }

    function getTitle(){
        return $this->title;
    }
    function getOriginaLenguage(){
        return $this->originaLenguage;
    }
    function getMinuts(){
        return $this->minuts;
    }
    function getGenere(){
        return $this->genere;
    }
}

$troy = new Movie ('troy', 'english', '90', 'fantasy');
echo $troy-> getTitle();
echo $troy-> getOriginaLenguage();
echo $troy-> getMinuts();
echo $troy-> getGenere();

$titanic = new Movie ('titanic', 'english', '120', 'drama');
echo $troy-> getTitle();
echo $troy-> getOriginaLenguage();
echo $troy-> getMinuts();
echo $troy-> getGenere();
