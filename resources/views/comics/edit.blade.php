@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica</h1>

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $comic->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di Vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}"
                    required>
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
