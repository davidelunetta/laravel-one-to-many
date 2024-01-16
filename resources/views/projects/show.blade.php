@extends('layouts.app') 

@section('content')
    <div class="container">
        
        
        @if($project->image_path)
        <img src="{{ asset('storage/' . $project->image_path) }}" alt="Immagine del progetto">
        @endif
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        <p><strong>Data di inizio:</strong> {{ $project->start_date }}</p>
        <form method="POST" action="{{ route('admin.projects.destroy', $project) }}" style="display:inline;" onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">Modifica</a>
    </div>
@endsection