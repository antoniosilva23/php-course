<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>
<body>
    <div>

        <?php 
          $ano = $_GET["an"];
          $idade = 2022 - $ano;
          echo "Quem nasceu em $ano tem idade de $idade anos. <br/>";
          $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
          echo "E dessa forma o seu voto é $tipo";
        ?>

    </div>
</body>
</html>