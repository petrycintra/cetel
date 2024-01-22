@extends('footer')
@extends('layout')                                              <!-- Importar configurações do Framework Front-End Materialize.Css -->
@section('title', 'CETEL - Centro de Estudos Teológicos Logos') <!-- Titulo da Página -->
@section('body')                                                <!-- Inicia a seção d conteúdo da página -->
@extends('navbar')                                              <!-- Importar configurações do menu superior -->

@auth
@foreach($index as $dados)

<div class="content">
    <div class="slider">

        <input class="radio-btn" type="radio" class="radio-slider" name="radio-slider" id="radio1">

        <div class="slide s1">
            <img src="/img/dashboard.jpg">
        </div>

    </div>

</div>

<div class="row white container description description-upside s12">

    <div class="row container">

    <div class="card" id="title1">
        <div class="card-content"  href="#">
            <span class="card-title orange-text center"> <strong>MINHA DASHBOARD</strong> </span>
        </div>
    </div><br>

    <div class="col s12 m6 left center">
        <a class="dropdown-trigger btn blue darken-4 dashboard-buttons" data-target="dropdownedit"><i class="material-icons left"> home </i> EDIÇÃO DE PÁGINA </a>
        <a href="{{ Route('boletoaluno')}}" class="btn blue darken-4 dashboard-buttons"><i class="material-icons left"> payment </i> ENVIAR BOLETO </a>
    </div>

    <div class="col s12 m6 center">
        <a href="{{ Route('corpodocenteadicionar') }}" class="btn orange darken-1 dashboard-buttons"><i class="material-icons left"> add </i> NOVO DOCENTE </a>
        <a href="{{ Route('sair') }}" class="btn red darken-0 dashboard-buttons"><i class="material-icons left"> close </i> SAIR </a>
        
    </div>

</div>

</div>

<div id="modal" class="modal">
    <div class="modal-content center">
        <form action="{{ Route('login.edit')}}" method="POST">
            @csrf
            
            <br><br>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" name="email" value="{{Auth::user()->email}}" type="email" class="validate" required >
                    <label class="active" for="email"><i class="material-icons left">person</i> E-mail</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="newpassword" name="newpassword" placeholder="Insira sua nova senha" type="password" class="validate" required>
                    <label class="active" for="newpassword"><i class="material-icons left">password</i> Nova Senha </label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="newpassword_repeat" name="newpassword_repeat" placeholder="Repetir a nova senha" type="password" class="validate" required>
                    <label class="active" for="newpassword_repeat"><i class="material-icons left">password</i> Repetir a Nova Senha </label>
                </div>
            </div>

            <button type="submit" class="btn blue darken-4"> ALTERAR DADOS </button>
            <a href="#!" class="btn red modal-close"> CANCELAR </a><br><br>

        </form>
    </div>
  </div>

  <ul id='dropdownedit' class='dropdown-content'>
    <li><a href="{{ Route('indexedit') }}"><i class="material-icons left"> home </i> EDITAR INDEX </a></li>
    <li><a href="{{ Route('corpodocenteedit') }}" class="dashboard-buttons"><i class="material-icons left"> people </i> EDITAR DOCENTES </a></li>
    <li><a href="{{ Route('cursopresencialedit') }}" class="dashboard-buttons"><i class="material-icons left"> help </i> EDITAR FAQ </a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a class="dashboard-buttons modal-trigger" data-target="modal"><i class="material-icons left"> password </i> EDITAR LOGIN </a></li>
  </ul>

@endforeach

@endsection

@if($mensagem = Session::get('success'))
<button class="btn green darken-2 notificacao"><i class="material-icons left">check</i>{{ $mensagem }}</button>
@endif

@if($mensagem = Session::get('erro'))
<button class="btn orange darken-2 notificacao"><i class="material-icons left">check</i>{{ $mensagem }}</button>
@endif

@else
<meta http-equiv="refresh" content="0; URL='./login'"/>
@endauth