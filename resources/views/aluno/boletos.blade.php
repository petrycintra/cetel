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

<div class="row white container description description-upside s12">

        <div class="row container">

            <form action="{{ Route('boletos_search') }}" method="POST" enctype="multipart/form-data">
                @csrf

            <div class="card" id="title1">
                <div class="card-content"  href="#">
                    <span class="card-title orange-text center"> <strong>PROCURAR BOLETOS</strong> </span>
                </div>
            </div><br>
        </div>

        <div class="row container">

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
                <input id="surname" name="surname" type="text" class="validate" placeholder="Sobrenome do aluno">
                <label for="surname">Sobrenome</label>
            </div>

            <div class="row container center">
                <button type="submit" class="btn blue darken-4"> PESQUISAR </button>
                <a href="javascript:history.back()" class="btn red"><i class="material-icons left"> close </i> CANCELAR </a>
            </div>

            @if(isset($boletos))

        <table>
            <thead>
              <tr>
                  <th>Nome</th>
                  <th>Vencimento</th>
                  <th>Boleto</th>
              </tr>
            </thead>
    
            <tbody>
            @foreach($boletos as $boleto)
              <tr>
                <td>{{ $boleto->name}}</td>
                <td>{{ date("d-m-Y", strtotime($boleto->expiration))}}</td>
                <td><a href="./doc/boletos/{{$boleto->boleto}}" class="btn green darken-2"> VER BOLETO </a></td>
              </tr>
              @endforeach
            </tbody>
          </table>

        @endif 

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
