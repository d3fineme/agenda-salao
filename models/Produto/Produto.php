<?php
/**
 * Created by PhpStorm.
 * User: Flavio
 * Date: 16/01/2019
 * Time: 21:31
 */
class Produto{
    private $codBarras, $nome, $valorCompra, $valorVenda;

    public function __construct($codBarras, $nome, $valorCompra, $valorVenda)
    {
        $this->codBarras = $codBarras;
        $this->nome = $nome;
        $this->valorCompra = $valorCompra;
        $this->valorVenda = $valorVenda;
    }

    /**
     * @return mixed
     */
    public function getCodBarras()
    {
        return $this->codBarras;
    }

    /**
     * @param mixed $codBarras
     */
    public function setCodBarras($codBarras)
    {
        $this->codBarras = $codBarras;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getValorCompra()
    {
        return $this->valorCompra;
    }

    /**
     * @param mixed $valorCompra
     */
    public function setValorCompra($valorCompra)
    {
        $this->valorCompra = $valorCompra;
    }

    /**
     * @return mixed
     */
    public function getValorVenda()
    {
        return $this->valorVenda;
    }

    /**
     * @param mixed $valorVenda
     */
    public function setValorVenda($valorVenda)
    {
        $this->valorVenda = $valorVenda;
    }


}