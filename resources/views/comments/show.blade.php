<x-app-layout>
    <link rel="stylesheet" href={{ asset('css/pages/comments.css') }}>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comentarios') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6">
                    <div class="navButtons">
                        <a href="#" class="btn btn-success" onClick="history.go(-1)">Voltar</a>
                    </div>
                    <div class="showComment">
                        <div class="content-box">
                            <label for="userName">Name</label>
                            <input type="text" name="userName" id="userName" value={{ Auth()->user()->find($comment->user_id)->name }} disabled>
                        </div>
                        <div class="content-box">
                            <label for="userEmail">Email</label>
                            <input type="text" name="userEmail" id="userEmail" value={{ Auth()->user()->find($comment->user_id)->email }} disabled>
                        </div>
                        <div class="content-box">
                            <label for="subject">Assunto</label>
                            <input type="text" name="subject" id="subject" value={{ $comment->subject }} disabled>
                        </div>
                        <div class="content-box">
                            <label for="mesage">Mensagem</label>
                            <input type="text" name="message" id="message" value={{ $comment->message }} disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
