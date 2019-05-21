@extends('layouts.app')

@section('content')


<form action="/files" method="post" enctype="multipart/form-data" ovalidate>

@csrf

@include ('public.files.partials.form')

<button type="submit" class="btn btn-primary">Save File</button>

</form>

@endsection