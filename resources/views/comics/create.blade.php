@extends ('layouts.app')

@section ('page-title', 'Create')

@section('main-content')



<div class="container">
    <div class="row">
        <div class="col">

            <div class="d-flex align-items-center justify-content-between">
                <h1 class="my-3">
                    Crea il comic
                </h1>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna ai comics
                </a>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('comics.store') }}" method="POST" class="text-white">

                @csrf
                {{-- Title/Thumb --}}
                <div class="row mb-3">
                    <div class="col">
                        <label 
                            for="title" 
                            class="form-label">
                            Title 
                            <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="text" 
                            class="form-control @error('title') is-invalid @enderror" 
                            name="title" 
                            id="title" 
                            placeholder="Inserisci il titolo" 
                            maxlength="64"
                            value="{{ old('title') }}"
                            required>
                    </div>
                    <div class="col">
                        <label 
                            for="thumb" 
                            class="form-label">
                            Copertina 
                        </label>
                        <input 
                            type="text" 
                            class="form-control @error('thumb') is-invalid @enderror" 
                            name="thumb" 
                            id="thumb"
                            maxlength="2048"
                            placeholder="Inserisci la copertina"
                            value="{{ old('thumb') }}"
                            maxlength="64">
                    </div>
                </div>

                {{-- Price/Series --}}
                <div class="row mb-3">
                    <div class="col">
                        <label 
                            for="price" 
                            class="form-label">
                            Prezzo 
                            <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="number" 
                            class="form-control @error('price') is-invalid @enderror" 
                            name="price" 
                            id="price"
                            step="0.01"
                            placeholder="Inserisci il prezzo"
                            max="999.99"
                            value="{{ old('price') }}"
                            required>
                    </div>
                    <div class="col">
                        <label 
                            for="series" 
                            class="form-label">
                            Serie
                            <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="text" 
                            class="form-control @error('series') is-invalid @enderror" 
                            name="series" 
                            id="series"
                            maxlength="64"
                            placeholder="Inserisci la serie"
                            value="{{ old('series') }}" 
                            required>
                    </div>
                </div>

                {{-- Date --}}
                <div class="mb-3">
                    <label 
                        for="sale_date" 
                        class="form-label">
                        Data vendita
                    </label>
                    <input 
                        type="date" 
                        class="form-control @error('sale_date') is-invalid @enderror" 
                        name="sale_date" 
                        id="sale_date"
                        value="{{ old('sale_date') }}" 
                        placeholder="Inserisci la data di vendita">
                </div>
                {{-- Type --}}
                <div class="mb-3">
                    <label 
                        for="type" 
                        class="form-label">
                        Tipo
                        <span class="text-danger">*</span>
                    </label>
                    <select 
                        class="form-select @error('type') is-invalid @enderror" 
                        id="type" 
                        name="type"
                        required>
                        <option 
                        @if(old('type') == null || old('type') == '')
                            selected 
                        @endif
                            disabled>Seleziona un tipo</option>
                        <option
                        @if(old('type') == 'comic book')
                            selected
                        @endif     
                        value="comic book">Comic book</option>
                        <option
                        @if(old('type') == 'graphic novel')
                            selected
                        @endif
                        value="graphic novel">Graphic novel</option>
                      </select>
                </div>
                {{-- Artists --}}
                <div class="mb-3">
                    <label 
                        for="artists" 
                        class="form-label">
                        Artisti
                    </label>
                    <input 
                        type="text" 
                        class="form-control @error('artists') is-invalid @enderror" 
                        name="artists" 
                        id="artists" 
                        aria-describedby="artists-help"
                        value="{{ old('artists') }}"
                        placeholder="Inserisci i artisti">
                    <div id="artists" class="form-text text-white">
                        Inserisci i nomi degli artisti separati da virgole 
                    </div>
                </div>
                {{-- Writers --}}
                <div class="mb-3">
                    <label 
                        for="writers" 
                        class="form-label">
                        Scrittori
                    </label>
                    <input 
                        type="text" 
                        class="form-control @error('writers') is-invalid @enderror" 
                        name="writers" 
                        id="writers" 
                        aria-describedby="writers-help"
                        value="{{ old('writers') }}"
                        placeholder="Inserisci i artisti">
                    <div id="writers" class="form-text text-white">
                        Inserisci i nomi degli scrittori separati da virgole 
                    </div>
                </div>
                {{-- Description --}}

                <div class="mb-3">
                    <label 
                        for="description" 
                        class="form-label">
                        Descrizione
                        <span class="text-danger">*</span>
                    </label>
                    <textarea 
                        class="form-control @error('description') is-invalid @enderror" 
                        id="description" 
                        rows="3"
                        name="description" 
                        maxlength="4098"
                        required>{{ old('description') }}</textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success">
                        Aggiungi comic
                    </button>
                </div>
            
            </form>
        </div>
    </div>
</div>
@endsection