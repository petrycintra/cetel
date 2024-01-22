@extends('footer')
@extends('layout')                                              <!-- Importar configurações do Framework Front-End Materialize.Css -->
@section('title', 'CETEL - Centro de Estudos Teológicos Logos') <!-- Titulo da Página -->
@section('body')                                                <!-- Inicia a seção d conteúdo da página -->
@extends('navbar')                                              <!-- Importar configurações do menu superior -->

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

            @foreach ($cursopresencial as $dadoscurso)

        <div class="row container">

            <div class="col m12 s12">
                <h5 class="col s12 orange-text darken-3" id="question"><strong> {{ $dadoscurso->question }} <a href="{{ Route('cursopresencialedit') }}_{{ $dadoscurso->id }}" class="btn orange darken-3 center col s4 right"> <i class="material-icons left"> edit </i>EDITAR </a> </h5>
                <br>
            </div><br>

            <div class="col m12 s12 corpodocente-paragraph">
                <span class="col s12" id="description-question"><strong> {{ $dadoscurso->description }} </span>
            </div><br>
            
            

        </div>

        @endforeach<div class="row container">

            <div class="col m12 s12">
                <h5 class="col s12 orange-text darken-3" id="question"><strong> Grade Curricular </h5>
            </div><br><br><br>

            <div class="white">
                <ul class="collapsible">
                    @foreach ($gradecurricular as $dadosgrade)
        
                    <li>
                        <div class="collapsible-header"><i class="material-icons">expand_more</i> {{ $dadosgrade->title }}   <a href="{{ Route('gradecurricularedit') }}_{{ $dadosgrade->id }}" class="btn orange darken-3 center col s4"> <i class="material-icons left"> edit </i>EDITAR </a></div>
                        <div class="collapsible-body"><span>{{ $dadosgrade->description }}</span></div>
                    </li>
        
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
        
@endforeach

<a class="back-to-top btn orange darken-3" onclick="scrollToTop()" href="#"> <i class="material-icons center"> expand_less </i> </a>

@endsection

