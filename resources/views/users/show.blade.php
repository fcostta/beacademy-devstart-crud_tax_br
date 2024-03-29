
@extends('template.index');

<title>Usuário {{ $user->name }}</title>
 
@section('body')

<section>

@if (session()-> has('update'))
<div class="container  alert alert-warning" role="alert">
    <strong>Usuário alterado com sucesso!</strong>
</div>
@endif


    <div class="container pt-5">
        <h2>Usuário</h2>
        <h4>{{ $user->name }}</h4>
        <hr>
        <table class="table table-hover table -striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">e-mail</th>
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col">Última atualização</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody class="text-center">
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($user->updated_at)) }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning text-white">Editar</a>
                            
                            <form class="d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"class="btn btn-danger text-white">Excluir</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
        </table>
    
        <div>
            <a href="{{ route('users.list') }}" class="btn btn-danger btn-lg btn-block" style="background-color: #9f3647">Voltar</a>
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