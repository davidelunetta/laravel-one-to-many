@extends('layouts.app')
@section('content')
{{-- form con action  --}}
<div class="container">
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nome progetto</label>
                <input type="text" name="name" id="name" class="form-control" id="formGroupExampleInput" placeholder="...">
            </div>
            
            <div class="mb-3">
                <label for="floatingTextarea">Descrizione progetto</label>
                <textarea class="form-control" placeholder="..." id="description" name="description"></textarea>
            
            </div>
            
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Data creazione</label>
                <input type="text" name="start_date" class="form-control" id="start_date" placeholder="...">
            </div>
            <div>
                <label for="image">Immagine:</label>
                <input type="file" name="image_path" accept="image/*">
            </div>
        </div>
        <button class="btn btn-primary mt-3" type="submit">Crea progetto</button>
    </form>
</div>
  
  {{-- end form --}}
  @endsection