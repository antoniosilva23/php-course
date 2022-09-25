<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis de variaveis</title>
</head>
<body>

    <div>

        <?php 
            $x = "abc"; //a varivel x recebe abc
            $$x = "def";// abc recebe def
            echo "O conteudo da variavel X é $x"; //abc
            echo "<br/>A variavel ABC criada recebeu o valor $abc"; //def

        ?>

    </div>

</body>
</html>