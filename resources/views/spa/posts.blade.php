{{-- layout --}}
@extends('layouts.app');

{{-- content from api --}}
@section('main_content')
    <h1>All posts from API</h1>

    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <post-component></post-component>
                <categories-component></categories-component>
            </div>
        </div>
    </div>
@endsection