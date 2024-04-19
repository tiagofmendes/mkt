<?php
include_once("connect.php");
$ARRAY = $API->comm("/ip/dhcp-server/lease/print", false);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Dispositivos</title>
</head>
<?php require_once("header.php"); ?>
<body>
<div class="content">
    <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Host Name</th>
            <th>Mac Address</th>
            <th>IP Address</th>
            <th>DHCP Server</th>
            </tr>
        </thead>
        <?php 
            foreach($ARRAY as $key => $value) { 
        ?>
        <tbody>
            <tr>         
                <td><span class="iconify" data-icon="mdi:badge-account-outline" style="color: #444;" data-width="20"></span>&nbsp;&nbsp;<?php echo 'ID: '.$key; ?> </td>
                <td><span class="iconify" data-icon="mdi:lan" style="color: #444;" data-width="20"></span>&nbsp;&nbsp;<?php echo $value['host-name']; ?></td>
                <td><span class="iconify" data-icon="bi:pci-card" style="color: #444;" data-width="20"></span>&nbsp;&nbsp;<?php echo $value['mac-address']; ?></td>
                <td><span class="iconify" data-icon="mdi:ip-network-outline" style="color: #444;" data-width="20"></span>&nbsp;&nbsp;<?php echo $value['address']; ?></td>
                <td><span class="iconify" data-icon="bi:hdd-network" style="color: #444;" data-width="20"></span>&nbsp;&nbsp;<?php echo $value['server']; ?></td>
            </tr>
        </tbody>
        <?php
            } ?>
    </table>
</div>
</body>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>