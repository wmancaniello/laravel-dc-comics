@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dettagli Prodotto:</h1>
        <a href="{{ route('comics.index') }}">
            <button type="button" class="btn btn-danger">
                Back
            </button>
        </a>
        <hr>
        <div class="container d-flex gap-3">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <div class="container">
                <h5>Title:</h5>
                <p>{{ $comic->title }}</p>
                <h5>Series:</h5>
                <p>{{ $comic->series }}</p>
                <h5>Description:</h5>
                <p>{{ $comic->description }}</p>
                <h5>Price:</h5>
                <h1 class="text-danger">{{ $comic->price }}</h1>
            </div>
        </div>
    </div>
@endsection
