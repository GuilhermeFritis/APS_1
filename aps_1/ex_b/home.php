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
        if(strcmp($_POST['senha'], $_POST['senha_redigitada']) && strlen($_POST['cpf']) == 11){
            echo "<h4 style='color: red'>Senhas digitadas não são iguais, retorno e digite a senha correta.</h4>";
            echo "<br>";
            echo "<a href='cadastro.html'>VOLTAR</a>";
        } else {            
            echo "<h4>Seja bem-vindo, ".strtoupper($_POST['nome'])."!</h4>";
        }
    ?>    
</body>
</html>