@extends('layout.app')
@section('title', 'Registro de Usuário')

@section('content')

    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
                <strong style="color: white">Sistema para Agendamento - SOFTHOUSE</strong>
        </div>
    </header>

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">FAÇA SEU CADASTRO</h1>
                <form method="POST" action="/usuarios" enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" name="photo">
                        <label class="custom-file-label" for="photo">Escolha sua foto:</label>
                    </div>
                    <div class="form-group text-left">
                        <label for="CPF">CPF:</label>
                        <input type="text" class="form-control cpf-mask" id="CPF" name="CPF" placeholder="999.999.999-99">
                    </div>
                    <div class="form-group text-left">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" rows="3">
                    </div>
                    <div class="form-group text-left">
                        <label for="cellPhone">E-mail:</label>
                        <input type="email" class="form-control cel-sp-mask" id="email" name="email" rows="3" placeholder="email@email.com.br">
                    </div>
                    <div class="form-group text-left">
                        <label for="cellPhone">Celular:</label>
                        <input type="tel" class="form-control cel-sp-mask" id="cellPhone" name="cellPhone" rows="3" placeholder="(00) 00000-0000">
                    </div>
                    <div class="form-group text-left">
                        <label for="graduation">Gradução:</label>
                        <input type="text" class="form-control" id="graduation" name="graduation" rows="3">
                    </div>
                    <div class="form-group text-left">
                        <label for="password">Informe uma senha para acesso:</label>
                        <input type="password" class="form-control" id="password" name="password" rows="3">
                    </div>
                    <div class="form-group text-left">
                        <label for="confirmPassword">Repita a senha:</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" rows="3">
                    </div>
                    <p>
                        <button type="submit" class="btn btn-primary my-2">CADASTRAR</button>
                        <button type="reset" class="btn btn-secondary my-2">CANCELAR</button>
                    </p>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <strong style="color: white">Todos os direitos reservados</strong>
        </div>
    </footer>
@endsection
