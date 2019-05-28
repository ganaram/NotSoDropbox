@extends('layouts.app')

@section('title','Archivos')

@section('content')

<h1> Listado de archivos </h1>

<div class="d-flex justify-content-center">
        {{ $files->links() }}
</div>

@forelse($files as $file)
<div class="card border-primary mb-3">
  <div class="card-header bg-dark">
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $file->slug }}</h5>
    <p class="card-text">{{$file->description}}</p>
    <div class="btn-group float-right" role="group">
    <a href="/files/{{ $file->slug }}" class="btn btn-primary">Mostrar</a>
    <a href="#" class="btn btn-warning">Editar</a>
    <form action="/files/{{ $file->slug }}" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger">Borrar</button>
  </form>
    </div>
  </div>
</div>

@empty
<p>No hay archivos en la BDD.</p>
@endforelse

</div>

@endsection