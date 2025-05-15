<?php
//soma da variável = $_array [name_input ]
$nome_aluno = $_POST ['nome_aluno'];
$nota01 = $_POST ['nota01'];
$nota02 = $_POST ['nota02'];
$nota03 = $_POST ['nota03'];

//calcula a média das notas
$media = ($nota01+$nota02+$nota03)/3;
//exibe o texto, "." é usado para concatenar a váriavel no texto a ser exibido 
echo "Aluno:". $nome_aluno;
echo "<br>";
echo "Sua media é: ".$media;

//faz a condição de reprovação recuperacao e reprovacao
if ($media > 5)
{
    echo "<br>";
    echo "Aprovado";
}

elseif ($media = 5)
{
    echo "<br>";
    echo "Recuperação";
}

else
{
    echo "<br>";
    echo "Reprovado";
}
?>

