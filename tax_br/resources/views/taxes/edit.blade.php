
@extends('template.index');

<title>Alteração de impostos</title>

@section('body')

<section>
<!-- ///////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <form action="{{ route('taxes.update', $tax->id) }}"method="POST" >
        @method('PUT')
        @csrf
        
        <div class="container mt-8 card text-center py-3 m-3" style="width: 60rem; height: 46rem; background-color: #e4e6c3 " >

            <h2 class="pt-5 text-left text-black">Atualização de<br>dados de impostos</h2>
            <hr>

            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-xs-6" >
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold" id="revenueCode">Código de Receita</span>
                        </div>
                        <input  id="revenueCode" name="revenueCode" type="text" class="form-control" 
                                placeholder="" aria-label="revenueCode" aria-describedby="NNome" value="{{ $tax->revenueCode }}">
                    </div>
                </div>

                <div class="col-md-8 col-xs-6">
                    <div  class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold" id="name">Nome</span>
                        </div>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Nome" 
                                aria-label="Nome" aria-describedby="NNome" value="{{ $tax->name }}">

                    </div>
                </div>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" 
                            id="description" name="description" style="height: 100px"> {{ $tax->description }} </textarea>

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
                                aria-label="aliquot" vertical-align="center" value="{{ $tax->aliquot }}">
                    </div>
                </div>

                
                <div class="col-md-4 col-xs-6">
                    
                    <label for="basic-url" class="fw-bold">Periodicidade</label>
                    <select class="form-select" aria-label="Default select example" name="calculationPeriod">
                        <option selected> {{ $tax->calculationPeriod }} </option>
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
                        <option selected> {{ $tax->sphere }} </option>
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
                                aria-label="collectionAgency" vertical-align="center" value="{{ $tax->collectionAgency }}">
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <label for="basic-url" class="fw-bold">Conta Contabíl</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">Nº</span>
                        </div>
                        <input id="accountingAccount" name="accountingAccount" type="text" class="form-control" 
                                aria-label="accountingAccount" vertical-align="center" value="{{ $tax->accountingAccount }}">
                    </div>
                </div>


                <div class="col-md-4 col-xs-6">
                    <label for="basic-url" class="fw-bold">Centro de Custo</label>
                    <div class="input-group mb-3 col">
                        <div class="input-group-prepend">
                            <span class="input-group-text fw-bold">Nº</span>
                        </div>
                        <input id="costCenter" name="costCenter" type="text" class="form-control" 
                                aria-label="costCenter" vertical-align="center" value="{{ $tax->costCenter }}">
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="basicLegislation">Legislação base:</span>
                </div>
                <input id="basicLegislation" name="basicLegislation" type="text" class="form-control" placeholder="" 
                        aria-label="Legislação base:" aria-describedby="NNome" value="{{ $tax->basicLegislation }}">
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-md-4 col-xs-6">

                    <label for="basic-url" class="fw-bold">Incidencia</label>
                    <select class="form-select" aria-label="Default select example" name="incidence" >
                        <option selected> {{ $tax->incidence }} </option>
                        <option value="Mercadorias">Mercadorias</option>
                        <option value="Serviços">Serviços</option>
                        <option value="Doações">Doações</option>
                        <option value="Outros">Outros</option>                      
                    </select>
                </div>

                
                <div class="col-md-4 col-xs-6">
                    
                    <label for="basic-url" class="fw-bold">Tipo de contribuinte</label>
                    <select class="form-select" aria-label="Default select example" name="typeOfTaxpayer" >
                        <option selected> {{ $tax->typeOfTaxpayer }} </option>
                        <option value="Industria">Industria</option>
                        <option value="Comércio">Comércio</option>
                        <option value="Serviços">Prestador de Serviços</option>
                        <option value="Outros">Outros</option>                      
                    </select>

                </div>

            </div>
            
             <hr>
 
            <div class="conteiner text-center mt-3">

                <button type="submit" class="btn btn-success text-white">Atualizar</button>

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