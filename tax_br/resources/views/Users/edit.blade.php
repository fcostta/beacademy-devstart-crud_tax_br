
<div style="background-color: #db4648 ">

    @extends('template.index');

    @section('title', "Usuário {$user->name}")

    <nav class="nav nav-masthead justify-content-center float-md-end">
        <a href="" class="nav-link text-white" style="background-color: #fb9553" >Home</a>
        <a href="{{ route('users.list') }}" class="nav-link text-white" style="background-color: #fb9553">Lista Usuários</a>
        <a href="" class="nav-link text-white" style="background-color: #fb9553">Lista Impostos</a>
        <a href="" class="nav-link text-white" style="background-color: #fb9553">Exemplo de Cálculo</a>
        <a href="{{ route('users.create') }}" class="nav-link text-white" style="background-color: #3f264d">Novo Usuário</a>
    </nav>
    <hr>
</div>


@section('body')

<section>
<!-- ///////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf

        <div class="container mt-8 card text-center py-3 m-3" 
                style="width: 60rem; height: 25rem; background-color: #e4e6c3 " >

            <h2 class="pt-3 text-left text-black">Alteração de dados</h2>
            <h3 class="pt-2 text-left text-black">{{$user->name}}</h3>
            <hr>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="name">Nome</span>
                </div>
                <input id="name" name="name" type="text" class="form-control" placeholder="Nome" 
                        aria-label="Nome" aria-describedby="NNome" value="{{ $user->name }}">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="email">e-mail</span>
                </div>
                <input id="email" name="email" type="text" class="form-control" placeholder="exemplo@email.com" 
                        aria-label="e-mail" aria-describedby="NNome" value="{{ $user->email }}">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="password">Senha</span>
                </div>
                <input id="password" name="password" type="password" class="form-control" placeholder="***************" 
                        aria-label="password" aria-describedby="NNome" value="{{ old('password') }}">
            </div>
            
 
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
