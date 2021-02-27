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

        {{-- title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- body --}}
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- category --}}
        <div class="form-group">
            <label for="categories">Categories</label>
            <select name="categories" id="categories">
                @foreach($categories as $category)
                <option value=" {{ $category->id }} "> {{ $category->name }} </option>
                @endforeach
            </select>
        </div>
        @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- tags --}}
        @if($tags)
            <div class="form-group">
            <label for="tags">Tags</label>
            <select class="form-control" name="tags[]" id="tags" multiple>
                @foreach($tags as $tag)
                <option value=" {{ $tag->id }} "> {{ $tag->name }} </option>
                @endforeach
            </select>
            </div>
        @endif
        @error('tag')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection