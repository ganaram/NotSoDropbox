@extends('layouts.app')

@section('title', 'Info')

@section('content')

<div class="card text-center">
        <div class="card-header">
          Información del archivo
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ ucwords(str_replace('-', ' ', $archivo->slug))}}</h5>
          <hr>
          <p class="card-text">{{$archivo->description}}</p>
          <a href="{{route('files.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
        <div class="card-footer text-muted">
        {{ $archivo->name}}
        </div>
      </div>
    

@endsection