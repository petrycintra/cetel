<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Importar CSS do framework Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Importar Icones do framework Materilize -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Importar CSS personalizado manualmente -->
    <link rel="stylesheet" type="text/css" href="./css/layout.css" media="screen" />

</head>
<body>

    @yield('navbar')
    @yield('body')

    
</body>

<main></main>

    <!-- Importar JavaScript básico do materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Importar framework Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Importar JavaScript personalizado manualmente -->
    <script src="./js/layout.js"></script>

    @yield('js')


</html>


@yield('css')
@foreach($index as $dados)

<style>


/* Div com as informações sobre a escola */
.about{
    background: url("../img/{{ $dados->about_photo }}");
    background-size: 100%;
    background-position: center;
    background-repeat: no-repeat;
    margin-top: 10%;
}

.about-mobile{
    background: url("../img/{{ $dados->about_photo }}");
    background-size: 100%;
    background-position: center;
    background-repeat: no-repeat;
}

/* div com nova chamada para a inscrição/matricula */
.about_two{
    background: url("../img/{{ $dados->about_footer_photo }} ");
    background-size: 100%;
    background-position: center;
    background-repeat: no-repeat;
    text-align: justify;
}

</style>

@endforeach

<script></script>
