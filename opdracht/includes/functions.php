<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    $leeftijd = " ";
     
    }

    function korting(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd){
        case $leeftijd <= 15: 
        echo "1";
        break;

        case 16:
        echo "€0,16";
        break;

        case 17:
        echo "€0,17";
        break;

        case 18:
        echo "€0,18";
        break;

        case 19:
        echo "€0,19";
        break;

        default:
        echo "€0.00";

    }
}   

?>