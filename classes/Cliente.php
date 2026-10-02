<?php

class Cliente
{
    private string $nome;
    private string $cpf;
    private string $telefone;

    public function __construct(
        string $nome,
        string $cpf,
        string $telefone
    ) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
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

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }
}