<?php 
    if (isset($_POST['sim'])){
        include("connect.php");
        $id = $_GET['id'];
        $apagando = $API->comm('/ip/firewall/filter/remove', array('numbers' => $id));
        echo '<html>';
        echo'<head>';
        echo '<script type="text/javascript" src="scripts.js"></script>';
        echo '<link rel="stylesheet" href="estilos.css">';
        echo ' <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
        echo'</head>';
        echo "<header>";
        include_once("header.php");
        echo "</header>";
        echo "<script> alert('Regra apagada com sucesso!');</script>";
        echo '<h1 class="info">Regra apagada com sucesso!</h1><br>';
        echo '<a href="firewall.php"><button type="button" class="btn btn-outline-dark">Firewall</button></a>';
        echo '</html>';
        die();
    }  
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <style type="text/css" src="estilos.css"></style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Apagar</title>
</head>
<body>
    <header>
        <?php include_once("header.php"); ?>
    </header>
    <h1 class="info">Deseja mesmo apagar a regra?</h1>
    <br>
        <form id="form_2" method="POST">
            <a href="firewall.php"><button id="nao" type="button" class="btn btn-outline-dark">Não</button></a>
            <button id="sim" class="btn btn-outline-danger" type="submit" name="sim" value="1">Sim</button>
        </form>
</body>
<script type="text/javascript" src="scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
