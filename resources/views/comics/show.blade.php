@extends ('layouts.app')

@section ('page-title', $comic->title)

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="my-3">
                    {{ $comic->title }}
                </h1>
                <div>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">
                        Torna ai comics
                    </a>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-danger">
                        Modifica
                    </a>
                </div>
            </div>

            <div class="card mb-3 text-bg-dark">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $comic->thumb }}" 
                        class="img-fluid rounded-start" 
                        alt="{{ $comic->title }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <ul>
                                <li>
                                    Prezzo:  €{{ number_format($comic->price, 2, ',', '.') }}
                                </li>
                                <li>
                                    Serie: {{ $comic->series }}
                                </li>
                                <li>
                                   Data vendita: {{ $comic->sale_date }}
                                </li>
                                <li>
                                    Tipo: {{ $comic->type }}
                                </li>
                            </ul>
                            <p>
                                Artisti:
                                {{ implode(', ', json_decode($comic->artists, true)) }}
                            </p>
                            <p>
                                Writers:
                                {{ implode(', ', json_decode($comic->writers, true)) }}
                            </p>
                            <p class="card-text">{{ $comic->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection