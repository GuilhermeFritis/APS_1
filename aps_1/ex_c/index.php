<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício B</title>
</head>
<body>
    <?php
        include_once("Pessoa.php");

        use Pessoa;

        $pessoa = new Pessoa("Fulano", 67.8, 1.72);
    ?>
    <p>Atributo público:<br>
        Consultar -> Nome = <?=$pessoa->nome?>;<br>
        Atualizar -> - <?php $pessoa->nome = "Atualizado" ?> - -> <?=$pessoa->nome?><br>   
    </p>
    <p>Atributo privado
        Consultar -> Peso = <?=$pessoa->peso?>;<br>
        Atualizar -> - <?php $pessoa->peso = 60.5 ?> - -> <?=$pessoa->peso?>
    </p>
    <p>Os métodos mágicos get e set permitem a utilização de variáveis privadas de fora de sua classe.</p>
</body>
</html>