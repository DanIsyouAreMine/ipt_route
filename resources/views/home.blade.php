@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Home Page</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('items') }}">Home Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('item') }}">item Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pics') }}">Picture Page</a>
                </li>   
            </ul>
        </div>
    </nav>
@endsection
