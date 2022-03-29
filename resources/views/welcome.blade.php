<x-guest-layout>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <x-navbar />
    <div class="banner-image1">
        <div class="banner-image">
            <section data-anime="left">
                <h2>Apenas programador Full-Stack</h2>
                <h3>É simples, pode ser composto. Se firma no concreto e torna-se, abstrato.</h3>
                <a href="#Contact">Entrar em contato.</a>
            </section>
        </div>
    </div>

    <div class="content-box left" id="tecnologies">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 content">
            <h2 data-anime="top">Projetos</h2>
        </div>
        <div class="courselBox" data-anime="botton">
            <x-carousel :projects="$projects" />
        </div>
    </div>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 content">
        <div class="content-box" id="projects">
            <h2 class="right mt-4" data-anime="right">Projetos</h2>
            <div data-anime="botton">
                <x-gallery :technologies="$technologies" />
            </div>
        </div>

        <div class="content-box left" id="aboutme">
            <h2 data-anime="left">Sobre mim</h2>
            <div class="content-box-data">


                <div class="content-box--aboutMe" id="aboutme" data-anime="left">
                    <p>
                        Muito prazer me chamo Victor, estudo programação des dos meus 16 anos e estou inserido na area a
                        1
                        ano,
                        sempre fui apaixonado por programação e des de pequeno "brinco" de programar des de jogos a
                        aplicações para ajudar no meu dia a dia
                        mas nunca levava a serio, ate que um dia decidi seguir por esse caminho e focar de verdade com
                        todas
                        as minhas forças.
                    </p>
                    <p>
                        No momento tenho uma ampla gama de skill para me ajudar no meu dia a dia, e estou apto a
                        trabalhar
                        em diversa modalidade de DevOps,
                        tanto na area de front-end, quanto na de back-end e tambem na area de deploy e sempre disposto a
                        aprender tecnologias novas, na minha opnião
                        conhecimento nunca é ruim de se ter.
                    </p>
                    <p>
                        Atualmente estou trabalhando como desenvolvedor focando no framework Laravel que ultiliza como
                        sua
                        principal linguagem php,
                        mais estou estudando bastante por fora python tanto flask quanto django, e me aventurando na
                        area de
                        data mining e machine learning.
                    </p>
                </div>

                <div class="content-box left content-box--aboutMe2" id="aboutme2" data-anime="right">
                    <div class="image"></div>
                </div>

            </div>

            <div class="content-box" id="contact">
                <h2 class="right" data-anime="right">Contato</h2>
                <div>
                    @if (session()->has('message'))
                        <div class="alert-success flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>{{ session('message') }}</p>
                        </div>
                    @endif
                </div>
                <div class="content-box--contact" data-anime="botton">
                    <h3>Entre em contato!</h3>
                    <h4>Preencha o formulário abaixo para esclarermos suas dúvidas e dar início ao seu projeto!</h4>

                    @if ($errors->any())
                        <div class="alert alert-success">
                            <strong>humm...</strong> Há algum problema com um dos campos.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @auth
                        <form action={{ route('comments.store') }} method="POST">
                            @csrf
                            @method('POST')
                            <div class="input">
                                <label for="subject">Assunto *</label>
                                <input type="text" name="subject" id="subject" required>
                            </div>
                            <div class="input">
                                <label for="mesage">Mensagem *</label>
                                <input type="text" name="message" id="message" required>
                            </div>
                            <button class="btn btn-success" type="submit">Enviar</button>
                        </form>
                    @else
                        <div class="not-logged">
                            <h4>Precisa estar logado para enviar comentarios.</h4>
                            <h4><a href="{{ route('login') }}">Logar-se</a></h4>
                        </div>
                    @endauth

                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
<script src={{ asset('js/Home.js') }}></script>
