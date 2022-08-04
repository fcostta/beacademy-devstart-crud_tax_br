
@extends('template.index');
@section('title', "Impostos, Taxas e Contribuições")

@section('body')

<section>

@if (session()-> has('destroy'))
<div class="container  alert alert-danger" role="alert">
    <strong>Imposto excluído com sucesso!</strong>
</div>
@elseif (session()-> has('create'))
<div class="container  alert alert-success" role="alert">
    <strong>Imposto cadastrado com sucesso!</strong>
</div>
@endif

    <div class="Container pt-5">

        <h1 class="h1 fw-bold mb-0 " style="color: #db4648;">Impostos, Taxas e Contribuições</h1>
        <hr>

        <div class="d-flex justify-content-center">

            <div class="row">

                <table class="table table-hover table -striped align-items-center">
                    <thead class="text-center">
                        <tr>
                            <th scope="col" class="align-middle">Código de<br>recolhimento</th>
                            <th scope="col" class="align-middle">Nome</th>
                            <th scope="col" class="align-middle">Período de<br>apuração</th>
                            <th scope="col" class="align-middle">Incidencia</th>
                            <th scope="col" class="align-middle">Alíquota</th>
                            <th scope="col" class="align-middle">Tipo de<br>contribuinte</th>
                            <th scope="col" class="align-middle">Última<br>atualização</th>
                            <th scope="col" class="align-middle">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        @foreach($taxes as $tax)
                        <tr>
                            <td class="align-middle">{{ $tax->revenueCode }}</td>
                            <td class="align-middle">{{ $tax->name }}</td>
                            <td class="align-middle">{{ $tax->calculationPeriod }}</td>
                            <td class="align-middle">{{ $tax->incidence }}</td>
                            <td class="align-middle">{{ $tax->aliquot }}%</td>
                            <td class="align-middle">{{ $tax->typeOfTaxpayer }}</td>
                            <td class="align-middle">{{ date('d/m/Y', strtotime($tax->updated_at)) }}</td>
                            <td class="align-middle"><a href= "{{ route('taxes.show', $tax->id) }}" class="btn btn-danger text-white" style="background-color: #9f3647">Visualizar</a></td>
                            
                        </tr>
                        @endforeach
                    </tbody>


                </table>
                
                <div class=" container justify-content-center pagination">
                        {{ $taxes->links('pagination::bootstrap-4') }}
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
