@extends('layouts.admin')

@section('content')
    <div class="container">
        <ul class="d-flex flex-column gap-3 list-unstyled text-uppercase fs-4">
            <li>Titolo: {{ $project->title }}</li>
            <li>Linguaggio utilizzato: {{ $project->language }}</li>
            <li>Frameworks Utilizzati: {{ $project->frameworks }}</li>
            <li>Stato: {{ $project->status }}</li>
            <li>Data Inizio: {{ $project->start_date }}</li>
            <li>Descrizione: {{ $project->description }}</li>
            <li>Tipologia: {{ $project->type?->title ?: 'Nessuna Tipologia' }}</li>
        </ul>
        <a class="btn btn-dark" href="{{ route('admin.projects.index') }}">Torna alla lista</a>

    </div>
@endsection
