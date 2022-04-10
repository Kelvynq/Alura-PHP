<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    protected $nome;
    protected $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumCPF();
    }
    protected function validarNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}