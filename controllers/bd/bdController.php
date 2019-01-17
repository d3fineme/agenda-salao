<?php
/**
 * Created by PhpStorm.
 * User: Flavio
 * Date: 16/01/2019
 * Time: 21:00
 */
require_once 'C:\xampp\htdocs\agenda-salao\vendor\idiorm.php';
require_once 'C:\xampp\htdocs\agenda-salao\models\Produto\Produto.php';

ORM::configure('mysql:host=localhost;dbname=mariabonita');
ORM::configure('username', 'root');
ORM::configure('password', '');

class bdController{
    public function cadastrarProduto(Produto $produto){
        $produtoBD = ORM::forTable('produtos')->create();
        $produtoBD->codbarra = $produto->getCodBarras();
        $produtoBD->nome = $produto->getNome();
        $produtoBD->valorcompra = $produto->getValorCompra();
        $produtoBD->valorvenda = $produto->getValorVenda();

        $produtoBD->save();
        return $produtoBD;
    }
}