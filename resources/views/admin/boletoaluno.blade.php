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
            <img src="/img/slide/{{ $dados->slider_photo_three }}">
        </div>

    </div>

</div>

<div class="row white container description description-upside s12">

        <div class="row container">

            <form action="{{ Route('boletoaluno_create') }}" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="card" id="title1">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center"> <strong>ENVIAR BOLETO DE ALUNO</strong> </span>
                </div>
            </div><br>
        </div>

        <div class="row container">

            <div class="file-field input-field">
                <div class="btn orange darken-3">
                <span>ARQUIVO DO BOLETO*</span>
                <input type="file" name="boleto_pdf" id="boleto_pdf">
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="ARQUIVO DO BOLETO" >
                </div>
            </div><br>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">contact_page</i>
                <input id="cpf" name="cpf" type="number" class="validate" placeholder="CPF do Aluno" required>
                <label for="cpf">CPF (Só números)*</label>
            </div>

            <div class="input-field col s12 m6">
                <i class="material-icons prefix">person</i>
                <input id="name" name="name" type="text" class="validate" placeholder="Nome do aluno" required>
                <label for="ame">Nome*</label>
            </div>

            <div class="input-field col s12 m6">
                <i class="material-icons prefix">person</i>
                <input id="surname" name="surname" type="text" class="validate" placeholder="Sobrenome do aluno" required>
                <label for="surname">Sobrenome*</label>
            </div>

            <div class="input-field col s12 m6">
                <i class="material-icons prefix">date</i>
                <input id="expiration" name="expiration" type="date" class="datepicker">
                <label for="expiration">Data de vencimento</label>
            </div>

        </div>

        <div class="row container center">
            <button type="submit" class="btn blue darken-4"> ENVIAR </button>
            <a href="javascript:history.back()" class="btn red"><i class="material-icons left"> close </i> CANCELAR </a>
        </div>
        
        </form>
    </div>

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
