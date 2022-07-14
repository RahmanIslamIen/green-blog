@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <h1 class="mb-5">Post Category : {{ $category }}</h1>
        <article>
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <h5>By. Rahman Islam in
                <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
