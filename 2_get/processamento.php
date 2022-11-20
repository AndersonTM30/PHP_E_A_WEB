<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];

if(isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome;
    $idade;
} else {
    $nome = 'Padrão';
    $idade = 'Padrão';
}

?>

<h1>O seu nome é: <?= $nome ?> e você tem <?= $idade ?> anos</h1>