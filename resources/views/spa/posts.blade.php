{{-- layout --}}
@extends('layouts.app');

{{-- content from api --}}
@section('main_content')
    <h1>All posts from API</h1>

    <div id="app">
        <post-component></post-component>
    </div>
@endsection