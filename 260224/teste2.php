<?php
$prova=4.65;
$prova2=7.34;
$media=($prova+$prova2)/2;

if($media>=6){
    echo("<h2>Aprovado</h2>");
}else{
    echo("<h2>Reprovado</h2>");
}

//exemplo para mes o desejado
$mes=1;
switch($mes){
    case 1: echo("Janeiro");
    break;
    case 2: echo("Fevereiro");
    break;
    case 3: echo("Março");
    break;
}

$numero=7;
$resultado;
$cont;
for($cont=1;$cont<=10;$cont++){
    $resultado=$numero*$cont;
    echo("<br>".$numero."x".$cont."=".$resultado);

}

$nome=$_POST['txt_nome'];
echo("<h2>".$nome. "</h2><br>");


?>