@foreach($index as $dados)

<nav class="blue darken-4 hide-on-med-and-down">
    <div class="nav-wrapper container">
      <ul id="nav-mobile" class="left">
        <li><a href=""><i class="material-icons left">alternate_email</i> {{ $dados->email }} </a></li>
        <li><a href=""><i class="material-icons left">phone</i> {{ $dados->tel_one }} | {{ $dados->tel_two }} </a></li>
      </ul>

      <ul id="nav-mobile" class="right">
        <li><a href=""> {{ $dados->menu_one }} </a></li>
        @auth
        <li><a href="{{Route('dashboard')}}" class="orange  valign-wrapper"> Minha Dashboard </a></li>
        @else
        <li><a href="{{Route('login.form')}}" class="orange  valign-wrapper"> {{ $dados->menu_btn }} </a></li>
        @endauth
      </ul>
      </div>
</nav>

<nav class="white hide-on-med-and-down">
    <div class="nav-wrapper container">
        <img href="{{Route('index')}}" class="left brand-logo" id="logo" src="/img/logo-index.png">
      <ul id="nav-mobile" class="right">
        <li ><a class="black-text" href="{{Route('index')}}"> {{ $dados->submenu_one }} </a></li>
        <li><a class="black-text" href="/#about"> {{ $dados->submenu_two }} </a></li>
        <li ><a class="black-text" href="{{ Route('corpodocente') }}"> {{ $dados->submenu_three }} </a></li>
        <li><a class="black-text" href="/#faq"> {{ $dados->submenu_four }} </a></li>
        <li><a class="black-text" href=""> {{ $dados->submenu_five }} </a></li>
      </ul>
      </div>
</nav>

<nav class="blue darken-4 hide-on-large-only center">
  <div class="nav-wrapper container menu-mobile">
    <ul id="nav-mobile" class="center">
      <li ><a class="black-text" href="{{Route('index')}}"> <i class="material-icons center"> home </i> </a></li>
      <li><a class="black-text" href="#about"> <i class="material-icons center"> apartment </i> </a></li>
      <li ><a class="black-text" href="{{ Route('corpodocente') }}"> <i class="material-icons center"> group </i> </a></li>
      <li><a class="black-text" href="#faq"> <i class="material-icons center"> help </i> </a></li>
      <li><a class="black-text" href=""> <i class="material-icons center"> contact_mail </i> </a></li>
      @auth
        <li><a class="black-text orange darken-3" href="{{ Route('dashboard') }}"> <i class="material-icons center"> dashboard </i> </a></li>
      @else
        <li><a class="black-text orange darken-3" href="{{ Route('login.form') }}"> <i class="material-icons center"> login </i> </a></li>
      @endauth
    </ul>
    </div>
</nav>

@endforeach
