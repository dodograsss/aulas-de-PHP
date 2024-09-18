<?php
include ("conexao.php");

$CPF = $_POST["cpf"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];

$sql = "insert into pessoas (cpf,nome,senha) values ('$cpf','$nome','$senha')";
$resultado = $conn->query($sql);

header("Location: lista.php");