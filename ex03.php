<?php

function cumprimentarPorPeriodo($nome, $hora)
{
    if($hora >=0 && $hora < 12) {
        echo "Bom Dia $nome !";
    }else if($hora >= 12 && $hora < 18) {
        echo "Boa Tarde $nome !";
    }else if($hora >= 18 && $hora <= 23 ) {
        echo "Boa Noite $nome !";
    }else {
        echo "Hora Inválida";
    }
}

/*function cumprimentarPorPeriodo($nome, $hora)
{
    if($hora >= 0 && $hora <= 23 ) {
        if($hora < 12) {
            echo "Bom Dia $nome !";
        }else if($hora < 18) {
            echo "Boa Tarde $nome !";
        }else {
            echo "Boa Noite $nome !";
        }
    }else {
        echo "hora invalida";
    }
}*/

cumprimentarPorPeriodo("Daniel", 24);