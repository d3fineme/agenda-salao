<?php include 'header-produto.php';
require_once '../../../../controllers/produtos/ProdutosController.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['barras'])&&isset($_POST['nome'])&&isset($_POST['precoCompra'])&&isset($_POST['precoVenda'])){
        $ctrProduto = new ProdutosController();
        $res = $ctrProduto->cadastraProduto($_POST['barras'], $_POST['nome'], $_POST['precoCompra'], $_POST['precoVenda']);
        if($res){
            //TODO: Exibir modal de confirmação de adição do produto
        }
    }
}?>
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="bootstrap-select fm-cmp-mg">
                                    <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                        <h2>Código de Barras</h2>
                                    </div>
                                    <form action="" method="post" name="cadastra-produto">
                                        <input type="text" class="form-control" onload="focus()" name="barras" id="barras" placeholder="código de barras">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Nome</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Preço de Compra</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <input type="text" class="form-control" name="precoCompra" id="precoCompra" placeholder="R$">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Preço de Venda</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <input type="text" class="form-control" name="precoVenda" id="precoVenda" placeholder="R$">

                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <button class="btn btn-default btn-icon-notika" type="submit"><i class="notika-icon notika-checked"></i> Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <!-- Form Element area End-->
<?php include 'footer-produto.php'; ?>