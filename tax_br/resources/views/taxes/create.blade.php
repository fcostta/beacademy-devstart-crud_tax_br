<div style="background-color: #db4648 ">

    @extends('template.index');

    <title>Cadastro de impostos</title>

    <nav class="nav nav-masthead justify-content-center float-md-end">
        <a href="" class="nav-link text-white" style="background-color: #fb9553" >Home</a>
        <a href="{{ route('users.list') }}" class="nav-link text-white" style="background-color: #fb9553">Lista Usuários</a>
        <a href="" class="nav-link text-white" style="background-color: #fb9553">Lista Impostos</a>
        <a href="" class="nav-link text-white" style="background-color: #fb9553">Exemplo de Cálculo</a>
    </nav>
    <hr>
</div>


@section('body')

<section>
<!-- ///////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


    <form action="{{ route('taxes.store') }}"method="POST" >
        @csrf

        <div class="container mt-8 card text-center py-3 m-3" style="width: 60rem; height: 42.5rem; background-color: #e4e6c3 " >

            <h2 class="pt-5 text-left text-black">Cadastro de impostos</h2>
            <hr>

            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-xs-6" >
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold" id="revenueCode">Código de Receita</span>
                        </div>
                        <input  id="revenueCode" name="revenueCode" type="text" class="form-control" 
                                placeholder="" aria-label="revenueCode" aria-describedby="NNome">
                    </div>
                </div>

                <div class="col-md-8 col-xs-6">
                    <div  class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold" id="name">Nome</span>
                        </div>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Nome" 
                                aria-label="Nome" aria-describedby="NNome">

                    </div>
                </div>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" 
                            id="description" name="description" style="height: 100px"></textarea>

                <label for="description" class="fw-bold">Descrição</label>
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-md-4 col-xs-6">
                    <label for="basic-url" class="fw-bold">Alíquota</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">%</span>
                        </div>
                        <input id="aliquot" name="aliquot" type="text" class="form-control" 
                                aria-label="aliquot" vertical-align="center">
                    </div>
                </div>

                
                <div class="col-md-4 col-xs-6">
                    
                    <label for="basic-url" class="fw-bold">Periodicidade</label>
                    <select class="form-select" aria-label="Default select example" name="calculationPeriod" >
                        <option selected> -- Selecione -- </option>
                        <option value="Anual">Anual</option>
                        <option value="Mensal">Mensal</option>
                        <option value="Quinzenal">Quinzenal</option>
                        <option value="Semanal">Semanal</option>
                        <option value="Diario">Diario</option>
                      
                    </select>
                </div>

                <div class="col-md-4 col-xs-6">
                    <label for="basic-url" class="fw-bold">Esfera</label>
                    <select class="form-select" aria-label="Default select example" name="sphere">
                        <option selected> -- Selecione -- </option>
                        <option value="Federal">Federal</option>
                        <option value="Estadual">Estadual</option>
                        <option value="Municipal">Municipal</option>
                        <option value="Outros">Outros</option>
                      
                    </select>
                </div>
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-md-4 col-xs-6">
                    <label for="basic-url" class="fw-bold">Orgão arrecadador</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">Nome</span>
                        </div>
                        <input id="collectionAgency" name="collectionAgency" type="text" class="form-control" 
                                aria-label="collectionAgency" vertical-align="center">
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <label for="basic-url" class="fw-bold">Conta Contabíl</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">Nº</span>
                        </div>
                        <input id="accountingAccount" name="accountingAccount" type="text" class="form-control" 
                                aria-label="accountingAccount" vertical-align="center">
                    </div>
                </div>


                <div class="col-md-4 col-xs-6">
                    <label for="basic-url" class="fw-bold">Centro de Custo</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">Nº</span>
                        </div>
                        <input id="costCenter" name="costCenter" type="text" class="form-control" 
                                aria-label="costCenter" vertical-align="center">
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="basicLegislation">Legislação base:</span>
                </div>
                <input id="basicLegislation" name="basicLegislation" type="text" class="form-control" placeholder="" 
                        aria-label="Legislação base:" aria-describedby="NNome">
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-md-4 col-xs-6">

                    <label for="basic-url" class="fw-bold">Incidencia</label>
                    <select class="form-select" aria-label="Default select example" name="incidence">
                        <option selected> -- Selecione -- </option>
                        <option value="Mercadorias">Mercadorias</option>
                        <option value="Serviços">Serviços</option>
                        <option value="Doações">Doações</option>
                        <option value="Outros">Outros</option>                      
                    </select>
                </div>

                
                <div class="col-md-4 col-xs-6">
                    
                    <label for="basic-url" class="fw-bold">Tipo de contribuinte</label>
                    <select class="form-select" aria-label="Default select example" name="typeOfTaxpayer">
                        <option selected> -- Selecione -- </option>
                        <option value="Industria">Industria</option>
                        <option value="Comércio">Comércio</option>
                        <option value="Serviços">Prestador de Serviços</option>
                        <option value="Outros">Outros</option>                      
                    </select>

                </div>

            </div>
            
             <hr>
 
            <div class="conteiner text-center mt-3">

                <button type="submit" class="btn btn-success text-white">Enviar</button>

            </div>

        </div>


    </form>


<!-- ///////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</section>
@endsection


<style>
    .desc-text {
        /* float: left;
        margin-top: 15px;
        width: 75%;
        display: inline-block; */
        white-space: nowrap;
        overflow: hidden !important;
        text-overflow: ellipsis;
    }
</style>
