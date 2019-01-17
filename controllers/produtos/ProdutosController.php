<?php
/**
 * Created by PhpStorm.
 * User: Flavio
 * Date: 16/01/2019
 * Time: 20:54
 */
require_once 'C:\xampp\htdocs\agenda-salao\controllers\bd\bdController.php';
require_once 'C:\xampp\htdocs\agenda-salao\models\Produto\Produto.php';

class ProdutosController{
    public function cadastraProduto($codBarras, $nome, $valorCompra, $valorVenda){
        $db = new bdController();
        $produto = new Produto($codBarras, $nome, $valorCompra,$valorVenda);
        $res = $db->cadastrarProduto($produto);
        return $res;
    }
}

