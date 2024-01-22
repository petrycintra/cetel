@extends('footer')
@extends('layout')                                              <!-- Importar configurações do Framework Front-End Materialize.Css -->
@section('title', 'CETEL - Centro de Estudos Teológicos Logos') <!-- Titulo da Página -->
@section('body')                                                <!-- Inicia a seção d conteúdo da página -->
@extends('navbar_index')                                        <!-- Importar configurações do menu superior -->

@foreach($index as $dados)

@php 
    //Cria array com caracteres não númericos  //Pega os caracteres informados e substitui por ""       //Transforma a variável String em int
    $remove = array('(', ')', ' ', '-');        $wnumber = str_replace($remove, '', $dados->tel_one);   $wnumber = intval($wnumber);
    $whats = "https://api.whatsapp.com/send/?phone=$wnumber&text=Olá%21+Gostaria+de+fazer+meu+cadastro+no+curso+de+psicanálise+&type=phone_number&app_absent=0";
@endphp

<div class="content">
    <div class="slider">

        <input class="radio-btn" type="radio" class="radio-slider" name="radio-slider" id="radio1">
        <input class="radio-btn" type="radio" class="radio-slider" name="radio-slider" id="radio2">
        <input class="radio-btn" type="radio" class="radio-slider" name="radio-slider" id="radio3">

        <div class="slide s1">
            <img src="/img/slide/{{ $dados->slider_photo_one }}">
        </div>

        <div class="slide">
            <img src="/img/slide/{{ $dados->slider_photo_two }}">
        </div>

        <div class="slide">
            <img src="/img/slide/{{ $dados->slider_photo_three }}">
        </div>
    </div>

    <div class="cards">
        <div class="slide-text s1">
            <div class="card-image">
                <div class="card-content white-text">
                    <h2 class="card-title"> <strong>{{ $dados->slider_title }}</strong></h2>
                    <h5>{{ $dados->slider_content }}</h5>
                </div>

                <div class="card-action"><br>
                    <a class="btn white black-text tooltipped modal-trigger" data-target="modal" data-position="bottom" data-tooltip="Olha, eu acho que essa é uma ótima escolha."><strong>{{ $dados->slider_btn }}</strong></a>
                </div>
            </div>
        </div>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content center">
            <form action="{{ Route('formwapp')}}" method="POST">
                @csrf
                
                <br><br>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" name="name" placeholder="Insira seu nome" type="text" class="validate" required >
                        <label class="active" for="name"><i class="material-icons left">person</i> Nome </label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="surname" name="surname" placeholder="Insira seu sobrenome" type="text" class="validate" required >
                        <label class="active" for="surname"><i class="material-icons left">person</i> sobrenome </label>
                    </div>
                </div>
    
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" placeholder="Insira seu email" type="email" class="validate" required>
                        <label class="active" for="email"><i class="material-icons left">email</i> Seu e-mail </label>
                    </div>
                </div>
    
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cpf" name="cpf" placeholder="Seu CPF" type="number" class="validate" required>
                        <label class="active" for="cpf"><i class="material-icons left">contacts</i> Insira CPF (Somente Números) </label>
                    </div>
                </div>

                <div class="input-field col s12 m6">
                    <i class="material-icons left">date</i>
                    <input id="birthday" name="birthday" type="date" class="datepicker">
                    <label for="birthday">Data de nascimento</label>
                </div>
    
                <button type="submit" class="btn blue darken-4"> AVANÇAR </button>
    
            </form>
        </div>
      </div>
    
    
    <!-- Label dos botões para passar/voltar imagem dop slide (Não disponivel em dispositivos móveis) -->
    <div class="navigation hide-on-med-and-down">
        <label class="bar b1" for="radio1" id="label1" ></label>
        <label class="bar b2" for="radio2" id="label2" ></label>
        <label class="bar b3" for="radio3" id="label3" ></label>
    </div>
    <div>
        
    </div>
</div>

<!-- Div contendo informações e descrição do curso (Não disponivel em dispositivos móveis ) -->
<div class="row white container description hide-on-med-and-down s12">

    <div class="col s1 description-text s1">
        <div class="card-image">
            <div class="card-content black-text center-align">
                <br><i class="material-icons center">lightbulb</i><br>
            </div>
        </div>
    </div>

    <div class="col s2 description-text s1">
        <div class="card-image">
            <div class="card-content black-text valign-wrapper">
                <h6 class="card-title"> <strong>{{ $dados->description_one_bolder }}</strong><br> {{ $dados->description_one_text }} </h6>
            </div>
        </div>
    </div>

    <div class="col s1 description-text s1">
        <div class="card-image">
            <div class="card-content black-text center-align">
                <br><i class="material-icons center">hotel</i><br>
            </div>
        </div>
    </div>

    <div class="col s2 description-text s1">
        <div class="card-image">
            <div class="card-content black-text valign-wrapper">
                <h6 class="card-title"> <strong>{{ $dados->description_two_bolder }}</strong><br> {{ $dados->description_two_text }} </h6>
            </div>
        </div>
    </div>

    <div class="col s1 description-text s1">
        <div class="card-image icon">
            <div class="card-content black-text center-align">
                <br><i class="material-icons center">sync_alt</i><br>
            </div>
        </div>
    </div>

    <div class="col s2 description-text s1">
        <div class="card-image">
            <div class="card-content black-text valign-wrapper">
                <h6 class="card-title"> <strong>{{ $dados->description_three_bolder }}</strong><br> {{ $dados->description_three_text }} </h6>
            </div>
        </div>
    </div>

    <div class="col s1 description-text s1">
        <div class="card-image">
            <div class="card-content black-text center-align">
                <br><i class="material-icons center">psychology_alt</i><br>
            </div>
        </div>
    </div>

    <div class="col s2 description-text s1">
        <div class="card-image">
            <div class="card-content black-text valign-wrapper">
                <h6 class="card-title"> <strong>{{ $dados->description_four_bolder }}</strong><br> {{ $dados->description_four_text }} </h6>
            </div>
        </div>
    </div>

    <div class="col s6 card-image banner">
        <img class="bannerimg" src="img/slide/{{ $dados->description_photo_left }}" alt="">
    </div>

    <div class="col s6 card-image banner">
        <img class="bannerimg" src="img/slide/{{ $dados->description_photo_right }}" alt="">
        <div class="card-content valign-wrapper">
            <h4 class="card-title description-inside white-text"> <strong>{{ $dados->description_title }}</strong><br> </h4>
            <h6 class="card-title description-inside-sub orange-text"> <strong>{{ $dados->description_subtitle }}</strong><br> </h6>
            <p class="card-title description-inside-subber white-text"> {{ $dados->description_text }}<br> </p>
            <a href="{{ $whats }}" class="card-title description-inside-btn white-text btn orange">{{ $dados->description_btn }} </a>
        </div>
    </div>

</div>

<!-- Div contendo informações e descrição do curso (Exclusivo para dispositivos móveis ) -->
<div class="row white container description hide-on-large-only s12">

    <div class="col s1 description-text s2">
        <div class="card-image">
            <div class="card-content black-text center-align">
                <br><i class="material-icons center">lightbulb</i><br>
            </div>
        </div>
    </div>

    <div class="col s2 description-text s4">
        <div class="card-image">
            <div class="card-content black-text valign-wrapper">
                <h6 class="card-title"> <strong>{{ $dados->description_one_bolder }}</strong><br> {{ $dados->description_one_text }} </h6>
            </div>
        </div>
    </div>

    <div class="col s1 description-text s2">
        <div class="card-image">
            <div class="card-content black-text center-align">
                <br><i class="material-icons center">psychology_alt</i><br>
            </div>
        </div>
    </div>

    <div class="col s2 description-text s4">
        <div class="card-image">
            <div class="card-content black-text valign-wrapper">
                <h6 class="card-title"> <strong>{{ $dados->description_four_bolder }}</strong><br> {{ $dados->description_four_text }} </h6>
            </div>
        </div>
    </div>

    <div class="col s12 card-image banner">
        <img class="bannerimg" src="img/slide/{{ $dados->description_photo_right }}" alt="">
        <div class="card-content valign-wrapper">
            <h4 class="card-title description-inside white-text"> <strong>{{ $dados->description_title }}</strong><br> </h4>
            <h6 class="card-title description-inside-sub orange-text"> <strong><br>{{ $dados->description_subtitle }}</strong><br> </h6>
            <p class="card-title description-inside-subber white-text"> <br><br>{{ $dados->description_text }}<br> </p>
            <a href="" class="card-title description-inside-btn-mobile white-text btn orange"> {{ $dados->description_btn }} </a>
        </div>
    </div>

</div>

    <!-- Div contendo informações sobre a instituição (Não disponivel em dispositivos móveis ) -->
    <div class="card about hide-on-med-and-down" id="about">
        <div class=" row container valign-wrapper">
            <div class="logo-about col m4 s12">
                <img class="left brand-logo col s12" src="/img/logo.png"><br><br><br><br>
                <span class="card-title col s12 orange-text col s12 center"><strong>{{ $dados->about_title }}</strong></span>
            </div>
            <div class="card-content col m8 s12 white-text about-paragraph">
                <h6>{{ $dados->about_paragraph_one }}</h6><br>

                <h6 ><strong>{{ $dados->about_paragraph_two_bolder }}</strong> {{ $dados->about_paragraph_two }}</h6>
            </div>
        </div>
    </div>

    <!-- Div contendo informações sobre a instituição (Exclusivo para dispositivos móveis ) -->
    <div class="card about-mobile hide-on-large-only" id="about-mobile">
        <div class=" row container valign-wrapper">
            <div class="card-content col m8 s12 white-text about-mobile-paragraph">
                <h6>{{ $dados->about_paragraph_one }}</h6><br>
            </div>
        </div>
    </div>

    <div class="card" id="faq">
        <div class="card-content"  href="#">
            <span class="card-title orange-text center"> <strong>PERGUNTAS FREQUENTES</strong> </span>
        </div>
    </div><br>

    <div class="container white">
        <ul class="collapsible">
            @foreach ($cursopresencial as $dadoscurso)

            <li>
                <div class="collapsible-header"><i class="material-icons">expand_more</i> {{ $dadoscurso->question }}</div>
                <div class="collapsible-body"><span>{{ $dadoscurso->description }}</span></div>
            </li>

            @endforeach
        </ul>
    </div>

    <!-- Div "Call to Action" antes do rodapé (Não disponivel em dispositivos móveis ) -->
    <div class="card about_two hide-on-med-and-down">
        <div class=" row container valign-wrapper">
            <div class="logo-about col s4">
                <img class="left brand-logo col s12" src="/img/logo.png"><br><br><br><br>
                <span class="card-title col s4 orange-text col s12 center"><strong>{{ $dados->about_footer_title }}</strong></span>
            </div>
            <div class="card-content col s8 white-text center-align">
                <h3> <strong>{{ $dados->about_footer_paragraph_one }}</strong></h3>
                    <h5>{{ $dados->about_footer_paragraph_two }}</h5>

                    <div class="card-action"><br>
                        <a href="{{ $whats }}"
                        class="btn orange black-text"><strong>{{ $dados->about_footer_btn }}</strong></a>
                    </div>
            </div>
        </div>
    </div>

    <!-- Div "Call to Action" antes do rodapé (Exclusivo para dispositivos móveis ) -->
    <div class="card about_two hide-on-large-only">
        <div class=" row container valign-wrapper">
            <div class="card-content col s12 white-text">
                <h3> <strong>{{ $dados->about_footer_paragraph_one }}</strong></h3>
                    <h5>{{ $dados->about_footer_paragraph_two }}</h5>

                    <div class="card-action"><br>
                        <a href="{{ $whats }}"
                        class="btn orange black-text"><strong>{{ $dados->about_footer_btn }}</strong></a>
                    </div>
            </div>
        </div>
    </div>

    <div>
        <div class="row container center-align social-media" id="social-media">
            <div class="row container">
                <div class="col s6 right-align">
                    <a href="http://www.instagram.com/{{ $dados->insta }}"><i class="material-icons"> <img class="footer-icons left" src="./img/insta.png"> </i> </a>
                </div>
                <div class="col s6 left-align">
                    <a href="{{ $whats }}"><i class="material-icons"> <img class="footer-icons left" src="./img/whats.png">  </i> </a>
                </div>
            </div>
        </div>
    </div>

    <a class="back-to-top btn orange darken-3" onclick="scrollToTop()" href="#"> <i class="material-icons center"> expand_less </i> </a>

@endforeach
@endsection