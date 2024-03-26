@extends('layouts.app')

@section('content')

<h1>Nuevo Libro</h1>

    <form action="{{ route('books.store') }}"  method="POST">
        @csrf

        <div class="mb-3">
            <label  class="form-label">Titulo</label>
            <input type="text" class="form-control" name="title" />
        </div>

        <div class="mb-3">
            <label  class="form-label">Descripción</label>
            <input type="text" class="form-control" name="description" />
        </div>

        <div class="mb-3">
            <label  class="form-label">Id Autor</label>
            <input type="text" class="form-control" name="author_id" />
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

@endsection
