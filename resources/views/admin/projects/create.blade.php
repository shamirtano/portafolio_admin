@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Agregar Nuevo Proyecto</h1>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <img src="{{ asset('images/no-image.png') }}" class="img-thumbnail mb-3" style="max-width: 200px;">
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
