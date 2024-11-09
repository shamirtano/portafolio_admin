@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar Educación</h1>

    <form action="{{ route('education.update', $education) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="degree" class="form-label">Grado</label>
            <input type="text" class="form-control" id="degree" name="degree" value="{{ old('degree', $education->degree) }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $education->title) }}">
        </div>
        <div class="mb-3">
            <label for="institution" class="form-label">Institución</label>
            <input type="text" class="form-control" id="institution" name="institution" value="{{ old('institution', $education->institution) }}">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $education->location) }}">
        </div>
        <div class="mb-3">
            <label for="finished" class="form-label">¿Terminado?</label>
            <select class="form-select" id="finished" name="finished">
                <option value="1" {{ old('finished', $education->finished) == 1 ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('finished', $education->finished) == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $education->start_date->format('Y-m-d')) }}">
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">Fecha de Fin</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $education->end_date ? $education->end_date->format('Y-m-d') : '') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('education.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
