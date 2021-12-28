<?php
function categoria($idade)
{
    if ($idade >= 6 and $idade <= 12) {
        echo "Você se enquadra na Categoria Infantil";
    }
    if ($idade >= 13 and $idade <= 18) {
        echo "Você se enquadra na Categoria Juvenil";
    }
    if ($idade > 18) {
        echo "Você se enquadra na Categoria Adulto ";
    }
}
echo"CADASTRO DE ATLETAS \n";
echo "Informe seu nome e idade nos campos abaixo \n";
echo "Nome: ";
$nome = readLine();
echo"Idade: ";
$idade = readLine();
categoria($idade);

?>