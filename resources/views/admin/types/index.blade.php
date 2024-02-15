@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Lista Tipologia</h1>

    @if (session('message'))
        <div class="alert  alert-dark "> {{ session('message') }}</div>
    @endif

    <ul>
        @foreach ($types as $type)
            <li class="d-flex justify-content-between container m-4">
                <h2>{{ $type->title }}</h2>
                <div class="d-flex align-items-center gap-2 ">
                    <a class="btn btn-primary" href="{{ route('admin.types.show', $type) }}">Mostra</a>
                    <a class="btn btn-secondary" href="{{ route('admin.types.edit', $type) }}">Modifica</a>
                    <form action="{{ route('admin.types.destroy', $type) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <a class="btn btn-primary " href="{{ route('admin.types.create') }}">Crea una Tipologia</a>
@endsection
