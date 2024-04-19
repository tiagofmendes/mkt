<?php 
include("connect.php");
if (count($_POST) > 0) {
    $mac_address = $_POST['mac_address'];
    $comentario = $_POST['comentario'];
    $regra = $API->comm("/ip/firewall/filter/add", array("chain"=>"forward", "action"=>"drop", "src-mac-address"=>$mac_address, "comment"=>$comentario));
    if ($regra) {
         echo "<script> alert('Bloqueado com sucesso!');</script>";
    }else {
         echo "<script> alert('ERROR: Não foi possível bloquear!');</script>";
    }
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
    <title>Bloquear</title>
</head>
<body id="adicionar">
    <header>
        <?php include_once("header.php"); ?>
    </header>
    <form id="fomr_1" method="POST">
        <div class="form-group">
            <label class="info" for="mac_address">Mac Address: </label>
                <input type="text" class="form-control" name="mac_address" placeholder="0A:2B:3C:4D:5E:6F"/>
                <small id="emailHelp" class="form-text text-muted">Insira o endereço Mac do dispositivo</small> <br>
        </div>
        <div class="form-group">
                <label class="info" for="comentario">Comentário: </label>
                <input type="text" class="form-control" name="comentario"/>
                <small id="emailHelp" class="form-text text-muted">Descrição / Comentário do dispositivo</small> <br>
                <button id="bloquear" name="bloquear" class="btn btn-outline-dark" type="submit"> Bloquear </button>
        </div>
    </form>
</body>
<script type="text/javascript" src="scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>