@extends('template.index');

<title>Cadastro de usuários</title>

@section('body')

<section>
<!-- ///////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


    <form action="{{ route('users.store') }}"method="POST" >
        @csrf

        <div class="container mt-8 card text-center py-3 m-3" style="width: 60rem; height: 25rem; background-color: #e4e6c3 " >

            <h2 class="pt-5 text-left text-black">Cadastro de Usuarios</h2>
            <hr>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="name">Nome</span>
                </div>
                <input id="name" name="name" type="text" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="NNome">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="email">e-mail</span>
                </div>
                <input id="email" name="email" type="text" class="form-control" placeholder="exemplo@email.com" aria-label="e-mail" aria-describedby="NNome">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text fw-bold" id="password">Senha</span>
                </div>
                <input id="password" name="password" type="password" class="form-control" placeholder="***************" aria-label="password" aria-describedby="NNome">
            </div>
            
 
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
