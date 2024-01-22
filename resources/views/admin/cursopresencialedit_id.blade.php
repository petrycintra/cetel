@extends('footer')
@extends('layout')                                              <!-- Importar configurações do Framework Front-End Materialize.Css -->
@section('title', 'CETEL - Centro de Estudos Teológicos Logos') <!-- Titulo da Página -->
@section('body')                                                <!-- Inicia a seção d conteúdo da página -->
@extends('navbar')                                              <!-- Importar configurações do menu superior -->
@auth

@foreach($index as $dados)

@php 
    //Cria array com caracteres não númericos  //Pega os caracteres informados e substitui por ""       //Transforma a variável String em int
    $remove = array('(', ')', ' ', '-');        $wnumber = str_replace($remove, '', $dados->tel_one);   $wnumber = intval($wnumber);
    $whats = "https://api.whatsapp.com/send/?phone=$wnumber&text=Olá%21+Gostaria+de+fazer+meu+cadastro+no+curso+de+psicanálise+&type=phone_number&app_absent=0";
@endphp

<div class="content">
    <div class="slider">

        <input class="radio-btn" type="radio" class="radio-slider" name="radio-slider" id="radio1">

        <div class="slide s1">
            <img src="/img/slide/{{ $dados->slider_photo_two }}">
        </div>

    </div>

</div>

<div class="row white container description description-upside s12">

        <div class="row container">

            <div class="col s12 card brown lighten-4" id="title1">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center col s12"> <strong>CURSO PRESENCIAL</strong> </span>
                    
                    <div class="col s12 center">
                        <br>
                        <div class="col m6 s12">
                            <h6><i class="material-icons left"> schedule </i> <strong> Duração </strong><br>2 Anos</h6>
                        </div>

                        <div class="col m6 s12">
                            <h6><i class="material-icons left"> update </i> <strong> Carga Horária </strong><br>1.680 Horas</h6>
                        </div>
                    </div>

                    <div class="col s12 center">
                        <div class="col s12">
                            <br><br>
                            <a class="btn brown lighten-2 dashboard-buttons hide-on-med-and-down" href="{{ $whats }}"> <i class="material-icons left"></i> QUERO ME MATRICULAR </a>
                            <a class="btn brown lighten-2 hide-on-large-only"
                            href="{{ $whats }}">
                            <i class="material-icons left"></i> QUERO ME MATRICULAR </a>
                            <br><br>
                        </div>
                    </div>
                    
                </div>
            </div><br>
        </div>

        <form action="{{ Route('cursopresencialedit_update') }}" method="POST">
            @csrf

            @foreach ($cursopresencial as $dadoscurso)

        <div class="row container">

            <input name="id" type="hidden" value="{{$dadoscurso->id}}">

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">title</i>
                <input id="question" name="question" type="text" class="validate" value="{{ $dadoscurso->question }}">
                <label for="question">Titulo</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">description</i>
                <textarea id="description" name="description" type="text" class="validate materialize-textarea">{{ $dadoscurso->description }}</textarea>
                <label for="description">Descrição</label>
            </div>

            <hr>

        </div>

        @endforeach

        <div class="row container center">
            <button type="submit" class="btn blue darken-4"> ATUALIZAR FAQ </button>
            <a href="javascript:history.back()" class="btn red"><i class="material-icons left"> close </i> CANCELAR </a>
        </div>
        
        </form>
    </div>
        
@endforeach

<a class="back-to-top btn orange darken-3" onclick="scrollToTop()" href="#"> <i class="material-icons center"> expand_less </i> </a>

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