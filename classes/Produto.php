<?php

class Produto
{
    private string $nome;
    private int $codigo;
    private float $tamanho;
    private string $cor;
    private float $preco;
    private int $quantidade;

    public function __construct(
        string $nome,
        int $codigo,
        float $tamanho,
        string $cor,
        float $preco,
        int $quantidade
    ) {
        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setTamanho($tamanho);
        $this->setCor($cor);
        $this->setPreco($preco);
        $this->setQuantidade($quantidade);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        if ($nome === "") {
            throw new Exception("O nome não pode ficar vazio.");
        }

        $this->nome = $nome;
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): void
    {
        if ($codigo < 0) {
            throw new Exception("O código não pode ser negativo.");
        }

        $this->codigo = $codigo;
    }

    public function getTamanho(): float
    {
        return $this->tamanho;
    }

    public function setTamanho(float $tamanho): void
    {
        if ($tamanho < 0) {
            throw new Exception("O tamanho não pode ser negativo.");
        }

        $this->tamanho = $tamanho;
    }

    public function getCor(): string
    {
        return $this->cor;
    }

    public function setCor(string $cor): void
    {
        if ($cor === "") {
            throw new Exception("A cor não pode ficar vazia.");
        }

        $this->cor = $cor;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        if ($preco < 0) {
            throw new Exception("O preço não pode ser negativo.");
        }

        $this->preco = $preco;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): void
    {
        if ($quantidade < 0) {
            throw new Exception("A quantidade não pode ser negativa.");
        }

        $this->quantidade = $quantidade;
    }
}