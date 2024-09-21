<?php 
require('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 20px;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        p {
            text-align: center;
        }
        p.error {
            color: red;
    </style>
</head>
<body>
    <div>
        <h1>
        Olá, <b>
            <?php echo $_SESSION['username'];?>
        </b>!
        <br>Você está logado com sucesso!
        </h1>
    </div>
    <p>
    <?php 
    if($username=='coordenacao')
    {
    <a href="cadastro.php">Registro de solicitações</a>;
    } else if($username=='tecnicos')
    {
        <a href="cadastro.php">Verifica solicitações Registradas</a>;
    } 
    ?>
    
        <a href="cadastro.php">Registro de Solicitações</a>
        <a href="logout.php">Sair da conta</a>
    </p>
</body>
</html>