<?php include "cabecalho.php"; ?>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <h2 class="mb-5">Cadastro de cliente</h2>
        <form action="salvarCliente.php" method="post">
            <input name="id" type="hidden" />
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Nome:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="nome"
                            type="text" />
                </div>
            </div><!-- Linha do NOME -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Cpf/Cnpj:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="cpf_cnpj"
                            type="text" />
                </div>
            </div><!-- Linha do Login -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Email:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="email"
                            type="email" />
                </div>
            </div><!-- Linha do email -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Telefone:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="telefone"
                            type="text" />
                </div>
            </div><!-- Linha do telefone -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Data:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="data"
                            type="date" />
                </div>
            </div><!-- Linha do data -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Logradouro:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="logradouro"
                            type="text" />
                </div>
            </div><!-- Linha do logradouro -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Número:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="numero"
                            type="number" />
                </div>
            </div><!-- Linha do numero -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Complemento:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="complemento"
                            type="text" />
                </div>
            </div><!-- Linha do complemento -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Bairro:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="bairro"
                            type="text" />
                </div>
            </div><!-- Linha do bairro -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Cidade:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="cidade"
                            type="text" />
                </div>
            </div><!-- Linha do cidade -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Estado:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="estado"
                            type="text" />
                </div>
            </div><!-- Linha do estado -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Cep:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="cep"
                            type="text" />
                </div>
            </div><!-- Linha do cep -->

            <div class="row align-items-center mb-3">
                <div class="col-2"> Ativo:</div>
                <div class="col-10">
                    
                        <input class="form-check-input" type="radio" name="ativo" checked> Sim
                        <input class="form-check-input ms-5" type="radio" name="ativo" value="0" > Não
                </div>
               
            </div><!-- Linha do Radio Ativo -->
            <div class="row align-items-center mb-3">
                <div class="col-12 text-end">
                    <button class="btn btn-success " type="submit" >
                        Salvar cliente
                    </button>
                </div>
                
            </div><!-- Linha do salvar cliente -->
        </form>
    </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>