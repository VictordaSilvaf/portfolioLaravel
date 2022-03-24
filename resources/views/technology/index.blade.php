<x-app-layout>
    <link rel="stylesheet" href={{ asset('css/pages/technology.css') }}>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tecnologias') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success flex justify-center" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="btn-content">
                        <a href={{ route('technology.create') }} class="btn btn-success">Adicionar tecnologia</a>
                    </div>
                    <div class="flex items-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Nome</td>
                                    <td>Status</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($technologies as $technology)
                                    <tr>
                                        <td>{{ $technology->id }}</td>
                                        <td>{{ $technology->name }}</td>
                                        <td>{{ $technology->image }}</td>
                                        <td>
                                            <form action={{ route('technology.destroy', $technology->id) }}
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Remover</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
