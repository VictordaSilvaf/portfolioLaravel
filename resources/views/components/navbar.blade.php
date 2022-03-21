<link rel="stylesheet" href={{ asset('css/components/navbar.css') }}>
<link rel="stylesheet" href={{ asset('css/pages/home.css') }}>
<div class="navbar-component">
    <div class="logo-navbar">
        <h1>Victor<span>Dev</span></h1>
    </div>

    <div class="menu-navbar">
        <a href="#">Home</a>
        <a href="#tecnologies">Tecnologias</a>
        <a href="#projects">Projetos</a>
        <a href="#aboutme">Sobre mim</a>
        <a href="#contact">Contato</a>
    </div>

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logar</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrar-se</a>
                @endif
            @endauth
        </div>
    @endif
</div>
