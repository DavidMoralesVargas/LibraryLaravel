@extends('layouts.app')

@section('content')

<h1>Editar Libro</h1>

    <form action="{{ route('books.update') }}"  method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name = "book_id" value ="{{$books -> id}}">

        <div class="mb-3">
            <label  class="form-label">Titulos</label>
            <input type="text" class="form-control" name="title" value={{ $books -> title }}/>
        </div>

        <div class="mb-3">
            <label  class="form-label">Descripciones</label>
            <input type="text" class="form-control" name="description" value={{ $books -> description }} />
        </div>

        <div class="mb-3">
            <label  class="form-label">Autores</label>
            <input type="text" class="form-control" name="author_id" value={{ $books -> author_id }} />
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

@endsection
