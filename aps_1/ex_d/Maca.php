<?php
include_once("Fruta.php");

class Maca implements Fruta{

    private string $cor;

    //� obrigado a implementar as fun��es de sua interface
    public function comer(){
        echo "Mordida";
    }

}