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
            <label for="categories">Categories</label>
              <select class="form-control" name="categories" id="categories">
              @foreach ($categories as $category)
                <option value=" {{ $category->id }} "> {{ $category->name }} </option>
              @endforeach
              </select>
        </div>


        {{-- tags --}}
        <div class="form-group">
          <label for="tags">Tags</label>
          <select class="form-control w-25" name="tags[]" id="tags" multiple>
                @if ($tags)
                    @foreach ($tags as $tag)
                        <option value=" {{ $tag->id }} "> {{ $tag->name }} </option>
                    @endforeach
                @endif
          </select>
        </div>
        @error('tags')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror




        {{-- btn submit --}}
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection

    