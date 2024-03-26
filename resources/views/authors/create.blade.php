@extends('layouts.app')

@section('content')

<h1>Nuevo Autor</h1>

    <form action="{{ route('author.store') }}"  method="POST">
        @csrf

        <div class="mb-3">
            <label  class="form-label">Nombres</label>
            <input type="text" class="form-control" name="first_name" />
        </div>

        <div class="mb-3">
            <label  class="form-label">apellidos</label>
            <input type="text" class="form-control" name="last_name" />
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

@endsection
