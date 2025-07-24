@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-2">{{ $post->title }}</h1>

    <p class="text-sm text-gray-400 mb-4">
        Criado por: {{ $post->user->name }} • {{ $post->created_at->diffForHumans() }}
    </p>

    <div class="bg-white p-4 shadow rounded mb-4">
        {!! nl2br(e($post->content)) !!}
    </div>

    @can('update', $post)
        <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Editar</a>
    @endcan
</div>
@endsection
