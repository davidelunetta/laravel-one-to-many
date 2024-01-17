@extends('layouts.app')
@section('content')

<div class="container">
    <div>
        <button class="btn btn-primary d-flex align-items-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
          </button>
          
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menù</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
              </div>
              {{-- <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                  Dropdown button
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div> --}}
            </div>
          </div>
    </div>

    <h1>Lista dei Progetti</h1>
    <div class="row">
        @foreach($projects as $project)
        <div class="col-md-4 mb-3">
            <div class="card mx-2">
                @if($project->image_path)
                <img src="{{ asset('storage/' . $project->image_path) }}" alt="Immagine del progetto">
                @endif
                <div class="card-body">
                    <h5 class="card-title mt-1">{{ $project->name }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <p class="card-text"><strong>Data di inizio:</strong> {{ $project->start_date }}</p>
                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary mt-3">Dettagli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Nuovo Progetto</a>
    
</div>
@endsection