<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username=='coordenacao' and $password=='coordenacao' or $username== 'tecnicos' and $password=='tecnicos')
    {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header('location: home.php');
    }
    else
    {
        header('location: index.php?error=1');
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
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
        <h1>Login</h1>
        <form action="index.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Login">
        </form>
        <?php
            if(isset($_GET['error']))
            {
                echo '<p style="color: red;">Senha Inválida!</p>';
            }
       ?>
    </body>
</html>