<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incremento</title>
</head>
<body>
<div>
        <?php 
            /*Este exercicio pretende demonstrar o uso de operadores
            de incremento e decremento*/
            #pré-decremento em PHP
            $atual = $_GET["aa"]; //pega o valor digitado no navegador.
            echo "O ano atual é $atual e o ano anterior é ". --$atual; 
            /* $_GET["aa"] Este parametro pega o valor digitado pelo usuario no navegador e o guarda dentro de uma variavel */   
        ?>
        
    </div>
</body>
</html>