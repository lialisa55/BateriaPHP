<html>
    <head>
        <title>Verificando maioridade</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Verificar maioridade</h1>
            <?php
                $idade = $_GET['idadein'];
                $nome = $_GET['nomein'];
                if ($idade >= 18){
                    echo $nome . " é maior de idade";
                }
                else{
                    echo $nome . " é menor de idade";
                }

            ?>
            <?php 
                echo "<br><br>";
                echo "<a href='usuario.php'>voltar</a>";
                echo "<br>"
                echo "<a href='../index.php'>index</a>";
            ?>
    </body>
</html>