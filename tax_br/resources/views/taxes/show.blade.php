
@extends('template.index');

<title> Impostos: {{ $tax->name }} </title>

@section('body')

<section>

@if (session()-> has('update'))
<div class="container  alert alert-warning" role="alert">
    <strong>Imposto alterado com sucesso!</strong>
</div>
@endif

    <div class="pt-3 card shadow m-3" style="width: 110rem;">
        <div class="row g-0">
            <div >

            <!--class="col-md-7"-->
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3 pb-1">
                        <span class="h1 fw-bold mb-0 " style="color: #db4648;">Imposto: {{ $tax->name }}</span>
                    </div>
  
                        <h5 class="card-title">Código de recolhimento: {{ $tax->revenueCode }} </h5>
                        <h6 class="card-subtitle mb-2 text-muted"><br></h6>
                        
                        <div class="pt-3 form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" 
                                id="description" name="description" style="height: 100px" disabled> {{ $tax->description }} </textarea>

                            <label for="description" class=" pt-4 fw-bold">Descrição</label>
                            <br>
                        </div>

                        <div class=" pt-3 form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" 
                                id="description" name="description" style="height: 100px" disabled> {{ $tax->basicLegislation }} </textarea>

                            <label for="description" class=" pt-4 fw-bold">Legislação:</label>
                            <br>
                        </div>

                    <div class="d-flex justify-content-center">

                    <div class="row">
                            <table class="table table-hover table -striped align-items-center">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col" class="align-middle">Período de<br>apuração</th>
                                        <th scope="col" class="align-middle">Incidencia</th>
                                        <th scope="col" class="align-middle">Alíquota</th>
                                        <th scope="col" class="align-middle">Tipo de<br>contribuinte</th>
                                        <th scope="col" class="align-middle">Esfera<br>(Federal / Estadual / Municipal)</th>
                                        <th scope="col" class="align-middle">Arrecadado<br>por:</th>
                                        <th scope="col" class="align-middle">Conta Contabíl</th>
                                        <th scope="col" class="align-middle">Centro de<br>Custo</th>
                                        <th scope="col" class="align-middle">Última<br>atualização</th>
                                        <th scope="col" class="align-middle">Data de<br>cadastro</th>
                                    </tr>
                                </thead>
                                
                                <tbody class="text-center">
                                    <tr>
                                        <td class="align-middle">{{ $tax->calculationPeriod }}</td>
                                        <td class="align-middle">{{ $tax->incidence }}</td>
                                        <td class="align-middle">{{ $tax->aliquot }}%</td>
                                        <td class="align-middle">{{ $tax->typeOfTaxpayer }}</td>
                                        <td class="align-middle">{{ $tax->sphere }}</td>
                                        <td class="align-middle">{{ $tax->collectionAgency }}</td>
                                        <td class="align-middle">{{ $tax->accountingAccount }}</td>
                                        <td class="align-middle">{{ $tax->costCenter }}</td>
                                        <td class="align-middle">{{ date('d/m/Y', strtotime($tax->updated_at)) }}</td>
                                        <td class="align-middle">{{ date('d/m/Y', strtotime($tax->created_at)) }}</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="conteiner text-center">
                        <a href="{{ route('taxes.edit', $tax->id) }}"  class="btn btn-warning text-white">Editar</a>
                        <form class="d-inline-block" action="{{ route('taxes.destroy', $tax->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                            <button type="submit" class="btn btn-danger text-white">Excluir</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
      
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
