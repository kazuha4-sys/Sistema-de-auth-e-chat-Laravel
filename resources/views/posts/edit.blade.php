@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Editar anotação</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ old('title', $post->title) }}" class="block w-full mb-2 border-gray-300 rounded" required>

        <textarea name="content" rows="6" class="block w-full mb-2 border-gray-300 rounded" required>{{ old('content', $post->content) }}</textarea>

        <label class="flex items-center mb-2">
            <input type="checkbox" name="is_public" value="1" {{ $post->is_public ? 'checked' : '' }} class="mr-2"> Público
        </label>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Atualizar</button>
    </form>
</div>
@endsection
