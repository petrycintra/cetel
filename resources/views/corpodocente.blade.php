@extends('footer')
@extends('layout')                                              <!-- Importar configurações do Framework Front-End Materialize.Css -->
@section('title', 'CETEL - Centro de Estudos Teológicos Logos') <!-- Titulo da Página -->
@section('body')                                                <!-- Inicia a seção d conteúdo da página -->
@extends('navbar')                                              <!-- Importar configurações do menu superior -->

@foreach($index as $dados)

<div class="content">
    <div class="slider">

        <input class="radio-btn" type="radio" class="radio-slider" name="radio-slider" id="radio1">

        <div class="slide s1">
            <img src="/img/slide/{{ $dados->slider_photo_three }}">
        </div>

    </div>

</div>

<div class="row white container description-upside description s12">

        <div class="row container">

            <div class="card" id="title1">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center"> <strong>CORPO DOCENTE</strong> </span>
                </div>
            </div><br>
        </div>

            @foreach ($corpodocente as $dadosdocente)

        <div class="row container">

            <div class="col m4 s12 center photo-name">
                <img class="perfil-photo" src="./img/corpodocente/{{$dadosdocente->perfil_photo}}" >
                <h6 class="col s12 grey-text darken-2" id="office"><strong> {{ $dadosdocente->office }} </strong></h6>
                <h5 class="col s12 blue-text darken-5 name-surname" id="name_surname"> <strong>{{ $dadosdocente->name }}</strong> {{ $dadosdocente->surname }}</h5>
            </div>

            <div class="col m8 s12 corpodocente-paragraph">
                <h6>
                    {{ $dadosdocente->paragraph_one }}
                </h6>

                <h6>
                    {{ $dadosdocente->paragraph_two }}
                </h6>

                <h6>
                    {{ $dadosdocente->paragraph_three }}
                </h6>
            </div>
            <hr>

        </div>

        @endforeach
    </div>
        
@endforeach

<a class="back-to-top btn orange darken-3" onclick="scrollToTop()" href="#"> <i class="material-icons center"> expand_less </i> </a>

@endsection

