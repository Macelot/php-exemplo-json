<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'Produto.php';
        $produto = new Produto("Teclado",150.0);
        echo $produto->getDados(); 

        echo "<hr>";
        echo "json_encode<br>";
        echo json_encode($produto,JSON_UNESCAPED_UNICODE);

        echo "<hr>";
        echo $produto->converte();

        echo "<hr>";
        $dados = get_object_vars($produto);
        var_dump($dados);

        echo "<hr>";
        var_dump($produto);
    ?>
</body>
</html>