<?php

class Funcionario
{
    private string $nome;
    private string $cpf;
    private string $cargo;

    public function __construct(
        string $nome,
        string $cpf,
        string $cargo
    ) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }
}