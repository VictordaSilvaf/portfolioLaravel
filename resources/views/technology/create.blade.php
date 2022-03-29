<link rel="stylesheet" href={{ asset('css/pages/projects.css') }}>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar tecnologia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="bg-gray-200 bg-opacity-25">
                    <div class="p-6">
                        <div class="subTitle">
                            <h2>Preencha o formulario para adicionar uma nova tecnologia</h2>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action={{ route('technologies.store') }} enctype="multipart/form-data">
                            @csrf
                            <div class="form">
                                <div class="form-box">
                                    <span>Nome: </span>
                                    <input type="text" name="name" id="name" required />
                                </div>
                                <div class="form-box">
                                    <span>Imagem: </span>
                                    <input type="file" name="image" id="image" required />
                                </div>

                                <div class="form-btn-box right">
                                    <button type="submit" class="btn btn-success">Adicionar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
