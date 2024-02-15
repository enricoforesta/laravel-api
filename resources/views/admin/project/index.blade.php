@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Lista Progetti</h1>

    @if (session('message'))
        <div class="alert  alert-dark "> {{ session('message') }}</div>
    @endif
    <ul>
        @foreach ($projects as $project)
            <li class="d-flex justify-content-between container m-4">
                <h2>{{ $project->title }}</h2>
                <div class="d-flex align-items-center gap-2 ">
                    <a class="btn btn-primary" href="{{ route('admin.projects.show', $project) }}">Mostra</a>
                    <a class="btn btn-secondary" href="{{ route('admin.projects.edit', $project) }}">Modifica</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <a class="btn btn-primary " href="{{ route('admin.projects.create') }}">Crea un Progetto</a>
@endsection
