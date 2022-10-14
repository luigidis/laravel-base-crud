@extends('layouts.app')

@section('metaTitle', 'Pagina Create Comics')

@section('content')
    <section>
        <div class='container'>
            <h2>Aggiungi nuovo comics</h2>
        </div>

        <div class="container">

            <form action="{{ route('comics.store') }}" method="POST">

                @csrf
                <p>
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" placeholder="Inserisci Titolo">
                </p>
                <p>
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10">Inserisci una descrizione del Comic che vuoi inserire</textarea>
                </p>
                <p>
                    <label for="thumb">Url Copertina</label>
                    <input type="text" name="thumb" id="thumb" placeholder="Inserisci Url copertina">
                </p>
                <p>
                    <label for="price">Prezzo</label>
                    <input type="text" name="price" id="price" placeholder="Inserisci Prezzo">
                </p>
                <p>
                    <label for="series">Serie</label>
                    <input type="text" name="series" id="series" placeholder="Inserisci Serie">
                </p>
                <p>
                    <label for="sale-date">Sale Date</label>
                    <input type="text" name="sale_date" id="sale-date" placeholder="Sale Date">
                </p>
                <p>
                    <label for="type">Tipo</label>
                    <input type="text" name="type" id="type" placeholder="Inserisci tipo" value="comic book">
                </p>
            </form>

        </div>
    </section>


@endsection
                    
