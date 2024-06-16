@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista Comics:</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaComic as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>
                            <strong>
                                {{ $item->title }}
                            </strong>
                        </td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->series }}</td>
                        <td>{{ $item->sale_date }}</td>
                        <td>
                            <a href="{{ route('comics.show', ['comic' => $item->id]) }}">
                                <button type="button" class="btn btn-success">
                                    Details
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
