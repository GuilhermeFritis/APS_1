<?php

include_once("Pessoa.php");

class Professor extends Pessoa{

    //mesmo não possuindo estes atributos, ele consegue utilizalos, por herdar da classe abstrata;
    public function __construct($nome, $altura, $peso){
        $this->nome = $nome;
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function digaOi(){
        echo "Olá, eu sou um Professor!";
    }

}
