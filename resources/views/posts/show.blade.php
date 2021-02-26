{{-- layout --}}
@extends('layouts.app')

{{-- title --}}
@section('title')
    post
@endsection

{{-- main-content --}}
@section('main_content')

<div class="container">
    <h2>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <p>Category: 
    {{-- {{$post->category ? $post->category->name : 'No Categories'}} --}}
    </p>
    <p>Tags:
    @if (count($post->tags) > 0)
        @foreach ($post->tags as $tag)
            {{ $tag->name }}
        @endforeach
    @else
        No Tags
    @endif
    </p>

</div>

@endsection

