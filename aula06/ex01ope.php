<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ope Atribuição</title>
</head>
<body>
    <div>
        <?php 
            $preco = $_GET["p"];
            echo "O preço do produto é €". number_format($preco, 2, ",", ".");

            $preco += $preco * 10 / 100;
            echo "<br/>O preço com 10% de aumento será €". number_format($preco, 2, ",", ".");        
        ?>
    </div>
</body>
</html>