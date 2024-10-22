@extends ('layouts.app')

@section ('page-title')

@section('main-content')

<h1>
    FORM
</h1>

<form action="{{ route('comics.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo" maxlength="64" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
        <input type="number" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo" required>
    </div>

    <div>
        <button type="submit" class="btn btn-success">
            +
        </button>
    </div>

</form>
@endsection