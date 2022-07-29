

<div style="background-color: #db4648 ">

    @extends('template.index');

    <title>Lista de usuários</title>

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

    <div class="container  pt-5">
        <h1>Lista de usuários</h1>
        <hr>
        <table class="table table-hover table -striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">e-mail</th>
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col">Última atualização</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($user->updated_at)) }}</td>
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-danger text-white" style="background-color: #9f3647">Visualizar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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