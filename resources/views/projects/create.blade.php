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
                        <form action={{ route('projects.store') }}>
                            @csrf
                            <div class="form">
                                <div class="form-box">
                                    <span>Nome: </span>
                                    <input type="text" required/>
                                </div>
                                <div class="form-box">
                                    <span>Descrição: </span>
                                    <input type="text" required/>
                                </div>
                                <div class="form-box">
                                    <span>Imagem: </span>
                                    <input type="text" required/>
                                </div>
                                <div class="form-box">
                                    <span>Estado: </span>
                                    <input type="text"/>
                                </div>

                                <div class="form-btn-box right">
                                    <button class="btn btn-success">Adicionar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
