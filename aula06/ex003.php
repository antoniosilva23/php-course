<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis referenciadas</title>
</head>
<body>
<div> 
        <?php // VARIAVEIS REFERENCIADAS
            
            $a = 3;
            $b = &$a;
            $b += 5;
            echo "Avariavel A vale $a";
            echo "<br/>A variavel B vale $b";
            /*Ao criar uma referencia entre a variavel A e a variavel B, sempre que houver uma alteração no valor da ultima variavel a primeira recebe sempre o valor da ultima*/
        ?>
    </div>
</body>
</html>