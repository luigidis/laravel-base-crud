@extends('layouts.app')

@section('metaTitle', 'pagina Index Comics')

@section('content')
<div class="jumbotron-container">
    <div class="" style="font-size: 50px; color: rgb(0, 229, 255); border: solid black 5px; background-color:burlywood">
        <a href="{{ route('comics.create') }}">
            Inserisci nuovo Comics
        </a>
    </div>

    <div class="container ps_absolute">
        <button class="button_absolute ">
            Current series
        </button>
    </div>
</div>
<div class="bg-color-black">
    <div class="container">
        @forelse($comics as $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic) }}">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    <h3>{{ $comic['series'] }}</h3>
                </a>
            </div>
        @empty
            <p>Non ci sono comics disponibili!</p>
        @endempty
</div>
</div>
@endsection