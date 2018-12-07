<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$ar = $_FILES['ar'];

/*$extensao = explode(".", $ar['name']);
$extensao = end($extensao);
move_uploaded_file($ar['tmp_name'], "uploads/" . $email . "." . $extensao);*/

$extensao = pathinfo($ar['name']);
$extensao = $extensao["extension"];
    //if($extensao == "pdf" || $extensao == "jpeg" || $extensao == "jpg" || $extensao == "png") {
      if(in_array($extensao, ["pdf", "jpeg", "jpg", "png"])) {
        move_uploaded_file($ar['tmp_name'], "uploads/" . $email . "." . $extensao);
        echo $nome;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $tel;
    }else {
        echo "Arquivo Inválido";
    }