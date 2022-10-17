@extends('layouts.app')

@section ('metaTitle', 'Pagina Show per id')

@section('content')

<section>
    <div>
        <ul>
            <li>
                <h1>{{ $comic->title }}</h1> 
            </li>
            <li>
                Descrizione: {{ $comic->description }}
            </li>
            <li>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </li>
            <li>
                Prezzo: {{ $comic->price }}
            </li>
            <li>
                Serie: {{ $comic->series }}
            </li>
            <li>
                Sale on: {{ $comic->sale_date }}
            </li>
            <li>
                Tipologia: {{ $comic->type }}
            </li>
            <li>
                <a href="{{ route('comics.edit', $comic)}}">Modifica fumetto</a>
            </li>
            <li>
                <form action="{{ route('comics.destroy', $comic)}}" method="POST">
                @csrf
                @method('DELETE')

                <input type="submit" value="Elimina">
                </form>
            </li>
        </ul>
    </div>
</section>

