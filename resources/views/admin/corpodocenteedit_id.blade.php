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

    <form action="{{ Route('corpodocenteedit_update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row container">

            <div class="card" id="title1">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center"> <strong>CORPO DOCENTE</strong> </span>
                </div>
            </div><br>
        </div>

            @foreach ($corpodocente as $dadosdocente)

            <input name="id" type="hidden" value="{{$dadosdocente->id}}">

        <div class="row container">

            <div class="file-field input-field">
                <div class="btn orange darken-3">
                <span>FOTO DE PERFIL</span>
                <input type="file" name="perfil_photo" id="perfil_photo">
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="ENVIAR UMA NOVA FOTO" >
                </div>
            </div><br>

            <div class="input-field col s6 m3">
                <i class="material-icons prefix">manage_accounts</i>
                <input id="office" name="office" type="text" class="validate" value="{{ $dadosdocente->office }}">
                <label for="office">Cargo/Especialização</label>
            </div>

            <div class="input-field col s6 m3">
                <i class="material-icons prefix">person</i>
                <input id="name" name="name" type="text" class="validate" value="{{ $dadosdocente->name }}">
                <label for="name">Nome</label>
            </div>

            <div class="input-field col s12 m6">
                <i class="material-icons prefix">person</i>
                <input id="surname" name="surname" type="text" class="validate" value="{{ $dadosdocente->surname }}">
                <label for="surname">Sobrenome</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">description</i>
                <textarea id="paragraph_one" name="paragraph_one" class="materialize-textarea">{{ $dadosdocente->paragraph_one }}</textarea>
                <label for="paragraph_one">Descrição Paragrafo 1</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">description</i>
                <textarea id="paragraph_two" name="paragraph_two" class="materialize-textarea">{{ $dadosdocente->paragraph_two }}</textarea>
                <label for="paragraph_two">Descrição Paragrafo 2</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">description</i>
                <textarea id="paragraph_three" name="paragraph_three" class="materialize-textarea">{{ $dadosdocente->paragraph_three }}</textarea>
                <label for="paragraph_three">Descrição Paragrafo 3</label>
            </div>

        </div>

        @endforeach

        <div class="row container center">
            <button type="submit" class="btn blue darken-4"> ENVIAR ATUALIZAÇÕES </button>
            <a href="javascript:history.back()" class="btn red"><i class="material-icons left"> close </i> CANCELAR </a>
        </div>
        
        </form>
    </div>
        
@endforeach

@endsection

@if($mensagem = Session::get('success'))
<button class="btn orange darken-2 notificacao"><i class="material-icons left">check</i>{{ $mensagem }}</button>
@endif

@else
<meta http-equiv="refresh" content="0; URL='./login'"/>
@endauth