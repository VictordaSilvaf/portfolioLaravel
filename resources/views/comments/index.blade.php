<x-app-layout>
    <link rel="stylesheet" href={{ asset('css/pages/comments.css') }}>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commentarios') }}
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
                    <div class="flex items-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Usuário</td>
                                    <td>Email</td>
                                    <td>Data</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td class="idTable">{{ $comment->id }}</td>
                                        <td class="nameTable">{{ Auth()->user()->find($comment->user_id)->name }}</td>
                                        <td class="nameTable">{{ Auth()->user()->find($comment->user_id)->email }}</td>
                                        <td>{{ $comment->created_at }}</td>
                                        <td class="btnsTable">

                                            <a class="btn btn-info" href={{ route('comments.show', $comment->id) }}>Ver</a>

                                            <form action={{ route('comments.destroy', $comment->id) }}
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
