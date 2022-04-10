<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property string $cidade
 * @property string $bairro
 * @property string $rua
 * @property string $numero
 */

class Endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
        public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
    private function alteraCidade (string $nome){
        $this->cidade=$nome;
    }
    private function alteraBairro (string $nome){
        $this->bairro=$nome;
    }
    private function alteraRua(string $nome){
        $this->rua=$nome;
    }
    private function alteraNumero (string $nome){
        $this->numero=$nome;
    }
    public function __set(string $nomeAtributo, $valor): void
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($valor);
    }
}