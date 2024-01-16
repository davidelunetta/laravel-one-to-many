@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica Progetto</h1>
        <form method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="name" value="{{ $project->name }}" required>
            </div>
            <div>
                <label for="description" class="form-label">Descrizione:</label>
                <textarea name="description" class="form-control" required>{{ $project->description }}</textarea>
            </div>
            <div>
                <label for="start_date" class="form-label">Data di Inizio:</label>
                <input type="date" class="form-control" name="start_date" value="{{ $project->start_date }}" required>
            </div>
            <div>
                <label for="image" class="form-label">Immagine:</label>
                <input type="file" class="form-control" name="image_path" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        </form>
    </div>
@endsection
