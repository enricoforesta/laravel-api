@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Dettaglio Tipologia</h1>
    <div class="container">
        <ul class="d-flex flex-column gap-3 list-unstyled text-uppercase fs-4">
            <li>Titolo: {{ $type->title }}</li>
        </ul>
        <a class="btn btn-dark" href="{{ route('admin.types.index') }}">Torna alla lista</a>

    </div>
@endsection
