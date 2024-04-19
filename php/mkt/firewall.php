<?php
include_once("connect.php");
// echo '<a href="adicionar.php">adicionar</a>';
$ARRAY = $API->comm("/ip/firewall/filter/print", false);
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
    <title>Firewall - Filters</title>
</head>
<body>
    <header>
        <?php include_once("header.php"); ?>
    </header>
    <table class="firewall">
        <thead>
            <tr>
            <th>#</th>
            <th>Regras</th>
            <th>Ações</th>
            </tr>
        </thead>
        <?php 
            foreach($ARRAY as $key => $value) { 
        ?>
        <tbody>
            <tr>         
                <td><?php echo 'ID: '.$key; ?> </td>
                <td><?php echo "Ação: ".$value['action'].'<br>'.
                                "Chain: ".$value['chain'].'<br>'.
                                "Comentário: ".$value['comment'].'<br>'?>
                                <?php 
                                    if (isset($value['src-mac-address'])) { ?>
                                        <?php echo "Mac Address: ".$value['src-mac-address']; ?> </td>
                                        <?php
                                    }
                                ?>
                <td>
                    <a href="apagar.php?id=<?php echo $value['.id'] ?>"><ion-icon id="apagar" name="trash"></ion-icon></a>
                </td>
            </tr>
        </tbody>
        <?php
            } ?>
    </table>
    </div>
</body>
<script type="text/javascript" src="scripts.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>