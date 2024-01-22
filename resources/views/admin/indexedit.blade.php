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
            <img src="/img/slide/{{ $dados->slider_photo_one }}">
        </div>

    </div>

</div>

<div class="row white container description description-upside s12">


        <form action="{{ Route('indexedit_update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row container">

            <div class="card" id="title1">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center"> <strong>MENUS DA PÁGINA</strong> </span>
                </div>
            </div><br>

            <div class="file-field input-field">
                <div class="btn orange">
                <span>Logo</span>
                <input type="file" name="logomarca" id="logomarca">
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="ENVIAR NOVA LOGOMARCA" >
                </div>
            </div><br>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">email</i>
                <input id="email" name="email" type="text" class="validate" value="{{ $dados->email }}">
                <label for="email">E-mail de Contato</label>
            </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">phone</i>
                <input id="tel_one" name="tel_one" type="text" class="validate" value="{{ $dados->tel_one }}">
                <label for="tel_one">Telefone 1</label>
            </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">smartphone</i>
                <input id="tel_two" name="tel_two" type="text" class="validate" value="{{ $dados->tel_two }}">
                <label for="tel_two">Telefone 2</label>
            </div>
            
            <div class="col s1 valign-wrapper">
                <i class="material-icons left"><img class="footer-icons left" src="./img/whats.png"></i>
            </div>

            <div class="input-field col s12 m3">
                
                @php //Cria array com caracteres não númericos  //Pega os caracteres informados e substitui por "nada"  //Transforma a variável em Int no lugar de string
                    $remove = array('(', ')', ' ', '-');        $wnumber = str_replace($remove, '', $dados->tel_one);   $wnumber = intval($wnumber);
                @endphp
                <input id="whats" name="whats" type="number" class="validate" value="{{ $wnumber }}" disabled>
                <label for="whats">Whats (mesmo número do tel 1)</label>
            </div><br>

            <div class="input-field col s11 m4">
                <i class="material-icons prefix">school</i>
                <input id="menu_one" name="menu_one" type="text" class="validate" value="{{ $dados->menu_one }}">
                <label for="menu_one">Menu 1</label>
            </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">login</i>
                <input id="menu_btn" name="menu_btn" type="text" class="validate" value="{{ $dados->menu_btn }}">
                <label for="menu_btn">Menu de Login</label>
            </div><br>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">home</i>
                <input id="submenu_one" name="submenu_one" type="text" class="validate" value="{{ $dados->submenu_one }}">
                <label for="submenu_one">Submenu "Home"</label>
            </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">apartment</i>
                <input id="submenu_two" name="submenu_two" type="text" class="validate" value="{{ $dados->submenu_two }}">
                <label for="submenu_two">Submenu "About"</label>
            </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">groups</i>
                <input id="submenu_three" name="submenu_three" type="text" class="validate" value="{{ $dados->submenu_three }}">
                <label for="submenu_three">Submenu "Equipe"</label>
            </div><br>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">quiz</i>
                <input id="submenu_four" name="submenu_four" type="text" class="validate" value="{{ $dados->submenu_four }}">
                <label for="submenu_four">Submenu "Faq"</label>
            </div>

            <div class="input-field col s12 m4">
                <i class="material-icons prefix">contact_page</i>
                <input id="submenu_five" name="submenu_five" type="text" class="validate" value="{{ $dados->submenu_five }}">
                <label for="submenu_five">Submenu "Contato"</label>
            </div>
            
            <div class="col s1 valign-wrapper">
                <i class="material-icons left"><img class="footer-icons left" src="./img/insta.png"></i>
            </div>

            <div class="input-field col s12 m3">
                <input id="insta" name="insta" type="text" class="validate" value="{{ $dados->insta }}">
                <label for="whats">Instagram (Não colocar "@")</label>
            </div><br>

        </div>
        <div class="row container">

            <div class="card" id="title2">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center"> <strong>CONTEÚDO DO SLIDE</strong> </span>
                </div>
            </div><br>

            <div class="file-field input-field">
                <div class="btn orange darken-3">
                <span>SLIDE 1</span>
                <input type="file" name="slide1" id="slide1">
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="ENVIAR FOTO DO PRIMEIRO SLIDE" >
                </div>
            </div><br>

            <div class="file-field input-field">
                <div class="btn orange darken-1">
                <span>SLIDE 2</span>
                <input type="file" name="slide2" id="slide2">
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="ENVIAR FOTO DO SEGUNDO SLIDE" >
                </div>
            </div><br>

            <div class="file-field input-field">
                <div class="btn orange lighten-2">
                <span>SLIDE 3</span>
                <input type="file" name="slide3" id="slide3">
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="ENVIAR FOTO DO TERCEIRO SLIDE" >
                </div>
            </div><br>

            <div class="input-field col s12 m6">
                <i class="material-icons prefix">title</i>
                <input id="slider_title" name="slider_title" type="text" class="validate" value="{{ $dados->slider_title }}">
                <label for="slider_title">Titulo do Slide</label>
            </div>

            <div class="input-field col s12 m6">
                <i class="material-icons prefix">indeterminate_check_box</i>
                <input id="slider_btn" name="slider_btn" type="text" class="validate" value="{{ $dados->slider_btn }}">
                <label for="slider_btn">Botão do Slide</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">description</i>
                <input id="slider_content" name="slider_content" type="text" class="validate" value="{{ $dados->slider_content }}">
                <label for="slider_content">Descrição do Slide</label>
            </div>
            
        </div>
        
        <div class="row container">

            <div class="card" id="title3">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center"> <strong>CONTEÚDO DA CAIXA CENTRAL</strong> </span>
                </div>
            </div><br>

            <div class="input-field col s12 m6">
                <i class="material-icons prefix">title</i>
                <input id="description_title" name="description_title" type="text" class="validate" value="{{ $dados->description_title }}">
                <label for="description_title">Titulo</label>
            </div>

            <div class="input-field col s12 m6">
                <i class="material-icons prefix">indeterminate_check_box</i>
                <input id="description_btn" name="description_btn" type="text" class="validate" value="{{ $dados->description_btn }}">
                <label for="description_btn">Botão de Matricula</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">subtitles</i>
                <input id="description_subtitle" name="description_subtitle" type="text" class="validate" value="{{ $dados->description_subtitle }}">
                <label for="description_subtitle">Subtitulo</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix">description</i>
                <textarea id="description_text" name="description_text" class="materialize-textarea">{{ $dados->description_text }}</textarea>
                <label for="description_text">Descrição</label>
            </div>

        </div>

        <div class="row container">

            <div class="card" id="title4">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center"> <strong>SOBRE A ESCOLA</strong> </span>
                </div>
            </div><br>

            <div class="file-field input-field">
                <div class="btn orange lighten-2">
                <span>FOTO DE FUNDO</span>
                <input type="file" name="about_photo" id="about_photo">
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="ENVIAR FOTO DE FUNDO" >
                </div>
            </div><br>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix"> Title </i>
                <input id="about_title" name="about_title" type="text" class="validate" value="{{ $dados->about_title }}">
                <label for="about_title">Titulo</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix"> description </i>
                <textarea id="about_paragraph_one" name="about_paragraph_one" class="materialize-textarea">{{ $dados->about_paragraph_one }}</textarea>
                <label for="about_paragraph_one">Paragrafo 1</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix"> transition_fade </i>
                <input id="about_paragraph_two_bolder" name="about_paragraph_two_bolder" type="text" class="validate" value="{{ $dados->about_paragraph_two_bolder }}">
                <label for="about_paragraph_two_bolder">Paragrafo 2 (Parte em Negrito)</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix"> description </i>
                <textarea id="about_paragraph_two" name="about_paragraph_two" class="materialize-textarea">{{ $dados->about_paragraph_two }}</textarea>
                <label for="about_paragraph_two">Paragrafo 2</label>
            </div>
        
        </div>

        <div class="row container">

            <div class="card" id="title5">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center"> <strong>SEMI-RODAPÉ</strong> </span>
                </div>
            </div><br>

            <div class="file-field input-field">
                <div class="btn orange lighten-2">
                <span>FOTO DE FUNDO</span>
                <input type="file" name="about_footer_photo" id="about_footer_photo" >
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="ENVIAR FOTO DE FUNDO" >
                </div>
            </div><br>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix"> Title </i>
                <input id="about_footer_title" name="about_footer_title" type="text" class="validate" value="{{ $dados->about_footer_title }}">
                <label for="about_footer_title">Titulo</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix"> description </i>
                <textarea id="about_footer_paragraph_one" name="about_footer_paragraph_one" class="materialize-textarea">{{ $dados->about_footer_paragraph_one }}</textarea>
                <label for="about_footer_paragraph_one">Paragrafo 1</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix"> description </i>
                <textarea id="about_footer_paragraph_two" name="about_footer_paragraph_two" class="materialize-textarea">{{ $dados->about_footer_paragraph_two }}</textarea>
                <label for="about_footer_paragraph_two">Paragrafo 2</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="material-icons prefix"> indeterminate_check_box </i>
                <input id="about_footer_btn" name="about_footer_btn" type="text" class="validate" value="{{ $dados->about_footer_btn }}">
                <label for="about_footer_btn">Texto do botão</label>
            </div>
        
        </div>

        <div class="row container center">
            <button type="submit" class="btn blue darken-4"> ENVIAR ATUALIZAÇÕES </button>
        </div>
        
        </form>

</div>

@endforeach

<a class="back-to-top btn orange darken-3" onclick="scrollToTop()" href="#"> <i class="material-icons center"> expand_less </i> </a>

@endsection


@if($mensagem = Session::get('success'))
<button class="btn orange darken-2 notificacao"><i class="material-icons left">check</i>{{ $mensagem }}</button>
@endif

@else
<meta http-equiv="refresh" content="0; URL='./login'"/>
@endauth
