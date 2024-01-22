@extends('footer')
@extends('layout')                                              <!-- Importar configurações do Framework Front-End Materialize.Css -->
@section('title', 'CETEL - Centro de Estudos Teológicos Logos') <!-- Titulo da Página -->
@section('body')                                                <!-- Inicia a seção d conteúdo da página -->
@extends('navbar_login')                                        <!-- Importar configurações do menu superior -->

@auth
<meta http-equiv="refresh" content="0; URL='./dashboard'"/>
@else

@foreach($index as $dados)

<div class="content-login">
<!-- É aqui onde fica a imagem de fundo, adicionado via css -->
</div>

<div class="row white container login s12">

    <div class="row container center">

        <form action="{{ Route('login.auth')}}" method="POST">
            @csrf
            
            <br><br>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" name="email" placeholder="Insira seu E-mail" type="email" class="validate" required >
                    <label class="active" for="email"><i class="material-icons left">person</i> E-mail</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="password" name="password" placeholder="Insira sua senha" type="password" class="validate" required>
                    <label class="active" for="password"><i class="material-icons left">password</i> Senha </label>
                </div>
            </div>

            <button type="submit" class="btn blue darken-4"> FAZER LOGIN </button>
            <a href="" class="btn orange darken-4" disabled> CADASTRAR </a><br><br>
            <a href="" class="waves-effect waves-teal btn-flat" disabled>Esqueceu a senha?</a>

        </form>

    </div>

</div>

@endforeach

@endsection

@if($mensagem = Session::get('success'))
<button class="btn green darken-2 notificacao"><i class="material-icons left">check</i>{{ $mensagem }}</button>
@endif

@if($mensagem = Session::get('erro'))
<button class="btn orange darken-2 notificacao"><i class="material-icons left">check</i>{{ $mensagem }}</button>
@endif

@endauth
