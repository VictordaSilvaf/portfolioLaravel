<x-app-layout>
    <link rel="stylesheet" href={{asset('css/pages/projects.css')}}>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projetos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="bg-gray-200 bg-opacity-25">
                    <div class="p-6">
                        <div class="btn-content">
                            <a href={{route('projects.create')}} class="btn btn-success">Adicionar projeto</a>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Teste teste tesr</td>
                                        <td>finalizado</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
