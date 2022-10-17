@extends('layouts.app')

@section('metaTitle', 'Pagina Create Comics')

@section('content')
    <section>
        <div class="bg-color-black">
            <div class='container create_title'>
                <h2>Aggiungi nuovo comics</h2>
            </div>

            <div class="container create_form_container">

                <form action="{{ route('comics.store') }}" method="POST" class="create_form">

                    @csrf
                    <p class="input_container">
                        <label for="title">Titolo</label>
                        <input type="text" style="@error('title') border-color: red @enderror" name="title" id="title"  value="{{ old('title') }}" placeholder="Inserisci Titolo">
                        @error
                        <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </p>
                    <p class="input_container">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="10">Inserisci una descrizione del Comic che vuoi inserire</textarea>
                        {{-- @error
                        <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}
                    </p>
                    <p class="input_container">
                        <label for="thumb">Url Copertina</label>
                        <input type="text" name="thumb" id="thumb" placeholder="Inserisci Url copertina">
                        @error
                        <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </p>
                    <p class="input_container">
                        <label for="price">Prezzo</label>
                        <input type="text" name="price" id="price" placeholder="Inserisci Prezzo">
                        @error
                        <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </p>
                    <p class="input_container">
                        <label for="series">Serie</label>
                        <input type="text" name="series" id="series" placeholder="Inserisci Serie">
                        @error
                        <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </p>
                    <p class="input_container">
                        <label for="sale-date">Sale Date</label>
                        <input type="text" name="sale_date" id="sale-date" placeholder="Sale Date">
                        @error
                        <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </p>
                    <p class="input_container">
                        <label for="type">Tipo</label>
                        <input type="text" name="type" id="type" placeholder="Inserisci tipo" value="comic book">
                        @error
                        <div style="color: red; font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </p>
                    <p class="input_container fg_100">
                        <input type="submit" value="Salva">
                    </p>
                </form>

            </div>
        </div>
    </section>


@endsection
