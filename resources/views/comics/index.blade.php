@extends ('layouts.app')

@section('page-title', 'Index')

@section('main-content')


<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="text-center mt-3">
        Comics
      </h1>
    
    <div class="my-3">
      <a href="{{ route('comics.create') }}" class="btn btn-primary">
        + Aggiungi comic
      </a>
    </div>
    
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Series</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Azione</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->type }}</td>
            <td>{{ $comic->series }}</td>
            <td>€{{ number_format($comic->price, 2, ',', '.') }}</td>
            <td>
              <a href="{{ route('comics.show',['comic' => $comic->id]) }}" class="btn btn-primary">
                VEDI
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection