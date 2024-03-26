@extends('layouts.app')

@section('content')

<h1>Editar Autor</h1>

    <form action="{{ route('author.update') }}"  method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name = "author_id" value ="{{$author -> id}}">

        <div class="mb-3">
            <label  class="form-label">Nombres</label>
            <input type="text" class="form-control" name="first_name" value={{ $author -> first_name }}/>
        </div>

        <div class="mb-3">
            <label  class="form-label">apellidos</label>
            <input type="text" class="form-control" name="last_name" value={{ $author -> last_name }} />
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

@endsection
