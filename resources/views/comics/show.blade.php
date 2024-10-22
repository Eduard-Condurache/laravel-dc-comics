@extends ('layouts.app')

@section ('page-title', $comic->title)

@section('main-content')
<h1>
    {{ $comic->title }}
</h1>

<div class="card">
    <div class="card-body">
        <ul>
            <li>
                Tipo: {{ $comic->type }}
            </li>
            <li>
                Prezzo: €{{ $comic->price }}
            </li>
            <li>
                Descrizione: {{ $comic->description }}
            </li>
        </ul>
    </div>
</div>
@endsection