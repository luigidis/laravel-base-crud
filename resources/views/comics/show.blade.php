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
        </ul>
    </div>
</section>

