@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Modifica tipologia</h1>

    <div class="container my-3">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.types.update', $type) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Titolo progetto</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required
                    value="{{ old('title', $type->title) }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary">Modifica</button>
                <a class="btn btn-dark" href="{{ route('admin.types.index') }}">Torna alla lista</a>
            </div>
        </form>
    </div>
@endsection
