<?php

require_once "Produto.php";
require_once "Cliente.php";
require_once "Funcionario.php";

class Venda
{
    private int $codigo;
    private string $data;
    private float $valorTotal;
    private Cliente $cliente;
    private Funcionario $funcionario;
    private Produto $produto;
    private int $quantidade;

    public function __construct(
        int $codigo,
        string $data,
        Cliente $cliente,
        Funcionario $funcionario,
        Produto $produto,
        int $quantidade
    ) {
        $this->codigo = $codigo;
        $this->data = $data;
        $this->cliente = $cliente;
        $this->funcionario = $funcionario;
        $this->produto = $produto;
        $this->quantidade = $quantidade;

        $this->valorTotal = $produto->getPreco() * $quantidade;
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function getFuncionario(): Funcionario
    {
        return $this->funcionario;
    }

    public function getProduto(): Produto
    {
        return $this->produto;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
}