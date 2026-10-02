<?php

require_once "classes/Produto.php";
require_once "classes/Cliente.php";
require_once "classes/Funcionario.php";
require_once "classes/Estoque.php";
require_once "classes/Venda.php";

$produto = new Produto(
    "Tênis Nike",
    1,
    40,
    "Preto",
    299.90,
    10
);

$cliente = new Cliente(
    "Ana",
    "123.456.789-00",
    "99999-9999"
);

$funcionario = new Funcionario(
    "Carlos",
    "987.654.321-00",
    "Vendedor"
);

$estoque = new Estoque($produto);

$estoque->entrada(5);

$venda = new Venda(
    1,
    "26/09/2026",
    $cliente,
    $funcionario,
    $produto,
    2
);

echo "<h2>Sapataria</h2>";

echo "Produto: " . $produto->getNome() . "<br>";
echo "Código: " . $produto->getCodigo() . "<br>";
echo "Tamanho: " . $produto->getTamanho() . "<br>";
echo "Cor: " . $produto->getCor() . "<br>";
echo "Preço: R$ " . $produto->getPreco() . "<br>";
echo "Quantidade em estoque: " . $estoque->getQuantidade() . "<br>";

echo "<hr>";

echo "Cliente: " . $cliente->getNome() . "<br>";
echo "Telefone: " . $cliente->getTelefone() . "<br>";

echo "<hr>";

echo "Funcionário: " . $funcionario->getNome() . "<br>";
echo "Cargo: " . $funcionario->getCargo() . "<br>";

echo "<hr>";

echo "Venda: " . $venda->getCodigo() . "<br>";
echo "Data: " . $venda->getData() . "<br>";
echo "Quantidade vendida: " . $venda->getQuantidade() . "<br>";
echo "Valor total: R$ " . $venda->getValorTotal() . "<br>";