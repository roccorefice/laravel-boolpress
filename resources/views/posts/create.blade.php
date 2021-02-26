{{-- layouts --}}
@extends('layouts.app')


{{-- main_content --}}
@section('main_content')

<h1>Create a new post</h1>

{{-- error --}}
@include('partials.error')

    <form action="{{route('posts.store')}}" method="post">

        @csrf

        {{-- title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- body --}}
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3" >{{ old('body') }}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- category --}}
        <div class="form-group">
            <label for="category">Category</label>
              <select class="form-control" name="category" id="category">
                <option value="{{ $category->id }}"> {{ $category->name }}</option>
              </select>
        </div>

        {{-- tags --}}

        


        {{-- btn submit --}}
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection

    