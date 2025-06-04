<?php

$nome = $_GET ['nm'];
if(strlen($nome) < 20)
{
    echo "o nome tem que ter mais de 20 carecteres";
}
else
{
    echo $nome."<br>";
}
$textarea = $_GET ['recado'];
echo $textarea."<br>";
$genero = $_GET ['genero'];
echo "Seu gênero é $genero<br>";
$estado = $_GET ['uf'];
echo "Você mora no estado de $estado<br>";
$opcao[0]=isset($_GET['op']);
$opcao[1]=isset($_GET['op1']);
$opcao[2]=isset($_GET['op2']);
echo"<br> Sua escolhas foram:<br>";
if($opcao[0] == 1) echo "Cinema<br>";
if($opcao[1] == 1) echo "Esporte<br>";
if($opcao[2] == 1) echo "Jogo<br>";
?>