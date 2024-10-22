@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Welcome
</h1>

<a href="{{ route('about') }}">
    About
</a>


@endsection