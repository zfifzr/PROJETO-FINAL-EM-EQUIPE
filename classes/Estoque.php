<?php

require_once "Produto.php";

class Estoque
{
    private Produto $produto;
    private int $quantidade;
    private int $entrada;
    private int $saida;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
        $this->quantidade = $produto->getQuantidade();
        $this->entrada = 0;
        $this->saida = 0;
    }

    public function entrada(int $quantidade): void
    {
        if ($quantidade <= 0) {
            throw new Exception("A entrada deve ser maior que zero.");
        }

        $this->entrada += $quantidade;
        $this->quantidade += $quantidade;

        $this->produto->setQuantidade($this->quantidade);
    }

    public function saida(int $quantidade): void
    {
        if ($quantidade <= 0) {
            throw new Exception("A saída deve ser maior que zero.");
        }

        if ($quantidade > $this->quantidade) {
            throw new Exception("Estoque insuficiente.");
        }

        $this->saida += $quantidade;
        $this->quantidade -= $quantidade;

        $this->produto->setQuantidade($this->quantidade);
    }

    public function getProduto(): Produto
    {
        return $this->produto;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function getEntrada(): int
    {
        return $this->entrada;
    }

    public function getSaida(): int
    {
        return $this->saida;
    }
}