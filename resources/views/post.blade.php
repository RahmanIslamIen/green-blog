@extends('layouts.main')

@section('container')
    <article>
        <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <h5>By. Rahman Islam in
            <a href="/categories/{{ $post->category->slug }}">
                {{ $post->category->name }}
            </a>
        </h5>
        <p>{!! $post->body !!}</p>
    </article>

    <a href="/posts">Back To Posts</a>
@endsection
