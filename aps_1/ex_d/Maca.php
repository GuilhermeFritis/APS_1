<?php
include_once("Fruta.php");

class Maca implements Fruta{

    private string $cor;

    //é obrigado a implementar as funções de sua interface
    public function comer(){
        echo "Mordida";
    }

}