<?php
class Pessoa{

    public string $nome;
    private float $altura;
    private float $peso;

    public function __construct($nome, $peso, $altura){
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    //metodo m�gico get
    public function __get($nome){
        return $this-$nome;
    }

    //metodo m�gico set
    public function __set($nome, $value){
        $this->$nome = $value;
    }

}
