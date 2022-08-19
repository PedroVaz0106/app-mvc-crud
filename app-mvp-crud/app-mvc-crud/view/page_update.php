<?php

include '../model/conexao.class.php';
include '../model/manager.class.php';

$manager = new Manager();
$id = $_POST['id'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Pedro Henrique Pimenta Vaz </title>
   
<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 

<!-- Icone da janela do computador -->
<link rel="shortcut icon" href="../resources/usericon.png" type="image/x-icon">

<!-- Icone Bootstrap 5 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" />

<!-- Google Fonts - Open Sans -->
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

<!-- Folha estilo CSS -->
<style type="text/css">
    body {
        margin: 20px;
        background-color: #fff; 
    }

    * {
        font-family: "Open Sans", sans-serif;
    }

    h2 {
        font-family: "Open Sans", sans-serif;
    }

    .thead {
        background-color: #f7f7f7;
    }
</style>

</head>
<body>

<div id="container">
    <h2 class="py-5 text-center">Atualizar Usuário</h2>

    <form method="POST" action="../controller/update_usuario.php">
        <div class="row g-3">
            <?php foreach ($manager->list_client_by_id($id) as $data) :?>
            <div class="col-md-6">
                <label for="name" class="form-label"> Nome <i class="bi bi-person"></i> </label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?= $data['nome'] ?>" required autofocus>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">E-mail <i class="bi bi-envelope"></i></label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $data['email'] ?>"required>
            </div>
            <div class="col-md-4">
                <label for="cpf" class="form-label"> CPF <i class="bi bi-credit-card-2-front"> </i></label>
                <input type="text" class="form-control" name="cpf" id="cpf" value="<?= $data['cpf'] ?>" required>
            </div>
            <div class="col-md-4">
                <label for="birth" class="form-label">Dt. de Nascimento <i class="bi bi-calendar"> </i> </label>
                <input type="date" class="form-control" name="data" id="data" value="<?= $data['data'] ?>" required>
            </div>
            <div class="col-md-4">
                <label for="phone" class="form-label"> Telefone <i class="bi bi-whatsapp"></i> </label>
                <input type="text" class="form-control" name="telefone" id="telefone" value="<?= $data['telefone'] ?>" required>
            </div>
            <div class="col-md-12">
                <label for="address" class="form-label"> Endereço <i class="bi bi-map"> </i></label>
                <input type="text" class="form-control" name="endereco" id="endereco" value="<?= $data['endereco'] ?>" required>
            </div>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <hr>
            <?php endforeach;?>
            <hr class="my-4">
            <div class="col-md-12 text-end">
                <button class="btn btn-primary btn-lg" type="submit">Atualizar</button>
                <a class=" btn btn-success btn-Ig" href="../index.php">Cancelar </a>
            </div>
        </div>
    </form>

</div>


<!-- Jquery e JqueryMaks -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>