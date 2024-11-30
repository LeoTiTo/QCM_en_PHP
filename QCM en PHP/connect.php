<?php
    //connexion à la base de donnée
    $id = mysqli_connect("localhost","root","","qcm");
    mysqli_query($id,"SET NAMES utf8");
    if(!id) echo "la connexion a échouée"
?>