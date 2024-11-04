<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sh">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
    <div style=">
    <?php
    if (isset($_SESSION['ID'])){
    $id = $SESSION['id'];
    echo "Olá $id";
    }
    ?>
   
    <div class="container text-center text-light" style="margin-top: 10%;">
        <h1>Bem vindo ao sistema de lançamentos</h1>
        <p>Escolha uma das opções abaixo:</p>
      <div style="display: flex; flex-direction: column;">
     <button type="button" class="btn btn-success" style="font-size: 30px;"> Cadastrar Categoria</button>
     <button type="button" class="btn btn-warning" style="font-size: 30px;">Realizar Lançamento</button>
     </div>
 </div>
</body>
</html>