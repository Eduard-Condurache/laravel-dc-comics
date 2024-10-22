@extends ('layouts.app')

@section ('page-title', 'Index COMICS')

@section('main-content')
<h1>
    INDEX COMICS
</h1>

<div>
  <a href="{{ route('comics.create') }}" class="btn btn-primary">
    + Aggiungi comic
  </a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Series</th>
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
        <td>
          <a href="{{ route('comics.show',['comic' => $comic->id]) }}" class="btn btn-primary">
            x
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection