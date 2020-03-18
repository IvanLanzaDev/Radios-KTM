<?php
    $link = mysqli_connect("localhost","u640958987_ktm","ktm@2018");
    if($link){
        mysqli_select_db($link, "u640958987_ktm");
    }else{
        echo "Erro ao conectar ao banco de dados!!!";
    }
?>