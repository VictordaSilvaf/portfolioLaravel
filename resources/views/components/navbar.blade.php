<link rel="stylesheet" href={{ asset('css/components/navbar.css') }}>
<link rel="stylesheet" href={{ asset('css/pages/home.css') }}>
<div class="navbar-component">
    <div class="logo-navbar">
        <a href="/">
            <h1>Victor<span>Dev</span></h1>
        </a>
    </div>

    <div class="menu-navbar">
        <a href="#">Home</a>
        <a href="#tecnologies">Tecnologias</a>
        <a href="#projects">Projetos</a>
        <a href="#aboutme">Sobre mim</a>
        <a href="#contact">Contato</a>
    </div>
    @if (Route::has('login'))
        <div class="loginBox">
            @auth
                @if (auth()->check() && auth()->user()->admin)
                    <div class="authenticationBox">

                        <a href="{{ route('dashboard') }}" class="">Dashboard</a>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" class="h-100" x-data>
                            @csrf

                            <a class="" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Deslogar') }}
                            </a>
                        </form>
                    </div>
                @else
                    <div class="authenticationBox">
                        <a href="{{ url('/') }}">Home</a>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Deslogar') }}
                            </a>
                        </form>
                    </div>
                @endif
            @else
                <a href="{{ route('login') }}">Logar</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4">Registrar-se</a>
                @endif
            @endauth
        </div>
    @endif

</div>
