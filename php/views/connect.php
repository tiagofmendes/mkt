<?php
    require("routeros_api.class.php");
    $API = new RouterosAPI();
    $API -> debug = false;
    $user_mikrotik = "admin";
    $password_mikrotik = "anatel02";
    $ip_mikrotik = "192.168.88.1";

    if($API -> connect($ip_mikrotik, $user_mikrotik, $password_mikrotik)) {
        
    } else {
        echo 'ERROR: Não foi possível se conectar ao RouterOS';
    }
?>
