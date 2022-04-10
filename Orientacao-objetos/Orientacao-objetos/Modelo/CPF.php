<?php

namespace Alura\Banco\Modelo;

class CPF
{
  private $numCPF;

    public function __construct(string $numCPF)
    {
        $this->numCPF = $numCPF;
    }

    public function recuperarNumCPF()
    {
        return $this->numCPF;
    }

}