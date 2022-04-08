<link rel="stylesheet" href={{ asset('css/components/navbar.css') }}>
<link rel="stylesheet" href={{ asset('css/pages/home.css') }}>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="navbar-component">
    <div class="logo-navbar">
        <a href="/">
            <h1>Victor<span>Dev</span></h1>
        </a>
    </div>

    <nav class="menu-navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#tecnologies">Tecnologias</a></li>
            <li><a href="#projects">Projetos</a></li>
            <li><a href="#aboutme">Sobre mim</a></li>
            <li><a href="#contact">Contato</a></li>
        </ul>
    </nav>

    @if (Route::has('login'))
        <nav class="loginBox">
            <ul>
                <li>
                    <a class="material-icons white">
                        menu
                    </a>
                    <ul>
                        <div class="mobile-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#tecnologies">Tecnologias</a></li>
                            <li><a href="#projects">Projetos</a></li>
                            <li><a href="#aboutme">Sobre mim</a></li>
                            <li><a href="#contact">Contato</a></li>
                        </div>
                        @auth
                            @if (auth()->check() && auth()->user()->admin)
                                <li><a href="{{ route('dashboard') }}" class="">Dashboard</a>
                                </li>
                                <!-- Authentication -->
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="h-100" x-data>
                                        @csrf

                                        <a class="" href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                            {{ __('Deslogar') }}
                                        </a>
                                    </form>
                                </li>
                            @else
                                <li><a href="{{ url('/') }}">Home</a></li>

                                <!-- Authentication -->
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Deslogar') }}
                                        </a>
                                    </form>
                                </li>
                            @endif
                        @else
                            <li><a href="{{ route('login') }}">Logar</a></li>

                            <li>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4">Registrar-se</a>
                                @endif
                            </li>
                        @endauth
                    </ul>

                </li>

            </ul>

        </nav>
    @endif

</div>
