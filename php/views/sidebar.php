<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Responsivo Template | Front</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include_once 'header.php'; ?>
    </header>
    <!--sidebar começo-->
    <div class="sidebar">
        <center>
            <img src="image/perfil.png" class="image" alt="">
            <h2 class='titulo'>WorkInTech</h2>
        </center>
        <a href="firewall.php"><ion-icon name="flame-outline"></ion-icon><span>Firewall</span></a>
        <a href="adicionar.php"><ion-icon name="ban-sharp"></ion-icon><span>Bloquear</span></a>
        <a href="leases.php"><ion-icon name="git-network-outline"></ion-icon><span>Dispositivos</span></a>
        <a href="system.php"><ion-icon name="hardware-chip-outline"></ion-icon><span>Sistema</span></a>
    </div>
    <!--sidebar final-->
    <div class="content"></div>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>