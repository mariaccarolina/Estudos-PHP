<?php
//print_r($_GET);
//print_r()é uma função PHP usada para imprimir informações sobre variaveis
//usada para debug.

//a função isset é usada para verificar se uma variavel é ou não nula, retornando true ou false
if (isset($_GET["nome"])) {
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
} else {
    $nome = "Usuario";
    $idade = "idade não informada";
}
?>

<h1>O seu nome é <?= $nome ?></h1> <br>
<p>Você tem <?= $idade ?> anos</p>