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
</div>

@endsection

