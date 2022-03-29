<link rel="stylesheet" href={{ asset('css/pages/projects.css') }}>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar projeto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="bg-gray-200 bg-opacity-25">
                    <div class="p-6">
                        <div class="subTitle">
                            <h2>Preencha o formulario de adicionar projeto</h2>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Tem algum erro com algum dos campos de preechimento.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action={{ route('projects.store') }} method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form">
                                <div class="form-box">
                                    <span>Nome: </span>
                                    <input type="text" name="name" id="name" required/>
                                </div>
                                <div class="form-box">
                                    <span>Descrição: </span>
                                    <input type="text" name="description" id="description" required/>
                                </div>
                                <div class="form-box">
                                    <span>Imagem: </span>
                                    <input type="file" name="images" id="images" required/>
                                </div>
                                <div class="form-box">
                                    <span>Link do projeto: </span>
                                    <input type="text" name="link" id="link" required/>
                                </div>
                                <div class="form-box">
                                    <span>Estado: </span>
                                    <input type="text" name="status" id="status" required/>
                                </div>

                                <div class="form-btn-box right">
                                    <button class="btn btn-success" type="submit">Adicionar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
