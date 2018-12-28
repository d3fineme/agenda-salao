<?php include 'header-produto.php'; ?>
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
                                    <form name="consulta-produto">
                                        <input type="text" class="form-control" onload="focus()" name="barras" id="barras" placeholder="código de barras">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Nome</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Preço de Compra</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="somente números">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Preço de Venda</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="somente números">
                                    </form>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <button class="btn btn-default btn-icon-notika"><i class="notika-icon notika-checked"></i> Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <!-- Form Element area End-->
<?php include 'footer-produto.php'; ?>