<div style="background-color: #0dcaf0">

    @extends('template.index');

    <title>Lista de usuários</title>

    <nav class="nav nav-masthead justify-content-center float-md-end">
        <a href="" class="nav-link text-white">Home</a>
        <a href="" class="nav-link text-white">a</a>
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
                        <td><a href="" class="btn btn-success text-white">Visualizar</a></td>
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
