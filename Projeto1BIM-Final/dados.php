<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="css/dados.css">
        <title>Dados</title>
    </head>

    <body>
        <div class="alert hd">
            <h1 class="title text-center">Dados do Formulário</h1>
        </div>
        <div class="dados">
            <?php
            if (isset($_POST["aid"]) && isset($_POST["desc"]) && isset($_POST["qnt"]) && isset($_POST["pr"]) && isset($_POST["tam"]) && isset($_POST["imgs"])) {
                $desc = $_POST["desc"];
                $qnt = $_POST["qnt"];
                $pr = $_POST["pr"];
                $tam = $_POST["tam"];

                echo "<div class=\"dados\">\n";
                echo "\t\t\t<p class=\"text\"><b>A descrição da roupa é: </b>" . $desc . "</p>\n";
                echo "\t\t\t<p class=\"text\"><b>Quantidade: </b>" . $qnt . "</p>\n";
                echo "\t\t\t<p class=\"text\"><b>O preço unitário é:</b> R$" . $pr . "</p>\n";
                echo "\t\t\t<p class=\"text\"><b>O tamanho de cada peça é: </b>" . $tam . "</p>\n";
                echo "\t\t</div>";
            } else {
                echo "<div>\n";
                echo "\t\t\t<p>Algum erro ocorreu no sistema</p>\n";
                echo "\t\t</div>";
            }
            ?>
        </div>
    </body>
</html>