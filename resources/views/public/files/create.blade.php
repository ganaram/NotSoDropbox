@extends('layouts.app')

@section('content')


<form action="/files" method="post" enctype="multipart/form-data" novalidate>

    @csrf

    @include ('public.files.partials.form')

    <button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection
