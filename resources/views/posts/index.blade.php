@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <h1 class="text-4xl font-extrabold text-white mb-8 border-b border-gray-200 pb-3">📒 Anotações públicas</h1>

    <div class="flex justify-end mb-6">
        <a href="{{ route('posts.create') }}" 
           class="inline-flex items-center px-5 py-2.5 bg-blue-600 border border-transparent rounded-lg font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
            + Nova anotação
        </a>
    </div>

    <div class="space-y-6">
        @foreach($posts as $post)
            <div class="bg-white shadow hover:shadow-md transition rounded-xl p-6 border border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">
                    <a href="{{ route('posts.show', $post) }}" class="hover:text-blue-600 transition">
                        {{ $post->title }}
                    </a>
                </h2>
                <p class="text-gray-600 mb-3 leading-relaxed">{{ Str::limit($post->content, 120) }}</p>
                <p class="text-sm text-gray-500">Criado por: <span class="font-medium">{{ $post->user->name }}</span> • {{ $post->created_at->diffForHumans() }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $posts->links() }}
    </div>
</div>
@endsection
