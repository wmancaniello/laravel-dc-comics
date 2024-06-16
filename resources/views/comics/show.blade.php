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
        <img src="{{ $comic->thumb }}" alt="">
    </div>
@endsection
