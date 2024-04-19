<?php
include_once("connect.php");
$ARRAY = $API->comm("/system/resource/print", false);
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
    <title>Dispositivos</title>
</head>
<body>
    <header>
        <?php include_once("header.php"); ?>
    </header>

    <table class="firewall">
        <?php 
            foreach($ARRAY as $key => $value) { 
        ?>
            <br>
            <h1 class="info"><span class="iconify" data-icon="bi:stopwatch" style="color: #444;" data-width="65"></span>&nbsp;&nbsp;<?php echo ' Uptime: ' . $value['uptime']; ?> </h1><br>
            <h1 class="info"><span class="iconify" data-icon="bi:box-seam" style="color: #444;" data-width="65"></span>&nbsp;&nbsp;<?php echo ' Versão: ' . $value['version']; ?></h1><br>
            <h1 class="info"><span class="iconify" data-icon="bi:memory" style="color: #444;" data-width="65"></span>&nbsp;&nbsp;<?php echo ' Memória Total: ' . $value['total-memory'] . ' B'; ?></h1><br>
            <h1 class="info"><span class="iconify" data-icon="bi:device-ssd" style="color: #444;" data-width="65"></span>&nbsp;&nbsp;<?php echo ' Memória Disponível: ' . $value['free-memory'] . ' B'; ?></h1><br>
            <h1 class="info"><span class="iconify" data-icon="bi:cpu-fill" style="color: #444;" data-width="65"></span>&nbsp;&nbsp;<?php echo ' CPU: ' . $value['cpu-load'] . '%'; ?></h1><br>
            <h1 class="info"><span class="iconify" data-icon="ant-design:thunderbolt-outlined" style="color: #444;" data-width="65"></span>&nbsp;&nbsp;<?php echo ' Frequência CPU: ' . $value['cpu-frequency'] . ' MHz'; ?></h1><br>
            <h1 class="info"><span class="iconify" data-icon="ant-design:gateway-outlined" style="color: #444;" data-width="65"></span>&nbsp;&nbsp;<?php echo ' Modelo: ' . $value['board-name']; ?></h1><br>
        <?php
            } ?>
    </table>
    </div>
</body>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<script type="text/javascript" src="scripts.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>