@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Criar nova anotação</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <input type="text" name="title" placeholder="Título" class="block w-full mb-2 border-gray-300 rounded" required>

        <textarea name="content" placeholder="Conteúdo" rows="6" class="block w-full mb-2 border-gray-300 rounded" required></textarea>

        <label class="flex items-center mb-2">
            <input type="checkbox" name="is_public" value="1" checked class="mr-2"> Público
        </label>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Salvar</button>
    </form>
</div>
@endsection
