{{-- layouts --}}
@extends('layouts.app')

{{-- main_content --}}
@section('main_content')

<h1>Edit {{$post->title}} </h1>

{{-- error --}}
@include('partials.error')

    <form action="{{ route('posts.update', ['post'=> $post->id]) }}" method="post">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection