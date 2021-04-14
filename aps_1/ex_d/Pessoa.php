<?php
abstract class Pessoa{

    public string $nome;
    protected float $altura;
    protected float $peso;

    //método abstrato precisa ser implementado por classes que herdarem.
    public abstract function digaOi();

}
