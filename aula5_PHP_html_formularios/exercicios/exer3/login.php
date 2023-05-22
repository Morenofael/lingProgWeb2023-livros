<?php 
$login = "";
if(isset($_POST['login']))
    $login = $_POST['login'];

$senha = "";
if(isset($_POST['senha']))
    $senha = $_POST['senha'];

$logado = false;
if($login == 'ifpr' && $senha == 'tds')
    $logado = true;

//echo $logado;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php if(! $logado): ?>
        <form action="" method="POST">
            <input type="text" name="login" placeholder="Informe o login">

            <br><br>

            <input type="password" name="senha" placeholder="Informe a senha">

            <br><br>

            <input type="submit" value="Logar" />
        </form>
    <?php else: ?>
        <h3>Bem vindo ao TDS!</h3>

        <?php 
            echo "<br>";
            echo "<a href='login.php'>Sair</a>";
        ?>
    <?php endif; ?>
    
</body>
</html>