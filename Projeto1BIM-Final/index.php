<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro Roupas</title>
		<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/index.css"/>
    </head>
    <body>
        <div class="alert hd">
            <h1 class="title text-center">Cadastro de Roupas</h1>
        </div>
        <main>
            <form action="dados.php" method="post" class="formes">
                    <div class="mb-1">
                        <label for="aid" class="form-label">ID:</label><br>
                        <input type="text" id="aid" name="aid" required class="form-control" minLength="6" maxLength="6"><br><br>
                    </div>
                    <div>
                        <label for="desc" class="form-label">Descrição</label><br> 
                        <input type="text" name="desc" id="desc" maxlength="50" class="form-control" required></textarea><br><br>
                    </div>
                    <div class="mb-1">
                        <label for="qnt" class="form-label">Quantidade</label><br>
                        <input type="number" id="qnt" name="qnt" placeholder="Ex: 1" required class="form-control" min="1"><br><br>
                    </div>
                    <div class="mb-1">
                        <label for="pr" class="form-label">Preço Unitário</label><br>
                        <input type="number" id="pr" name="pr" placeholder="Ex: 67,89" required class="form-control" step="0.01" min="0.01"><br><br>
                    </div>
                    <div class="mb-1">
                        <label for="tam" class="form-label">Tamanho</label><br>
                        <input type="number" id="tam" name="tam" placeholder="Ex: 39" required class="form-control" min="1"><br><br>
                    </div>
                    <div class="mb-1">
                        <label for="imgs" class="form-label">Imagem</label><br>
                        <input type="file" id="imgs" name="imgs" accept="image/*" required onchange="checkFileNameLength(this)" class="form-control"><br><br>                    </div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-outline-dark">
                        <input type="reset" class="btn btn-outline-dark"> 
                    </div>
                </form>
            </main>
    </body>
    <script src="js/index.js"></script>
</html>