@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar Experiencia</h1>

    <form action="{{ route('experiences.update', $experience) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="type" class="form-label">Típo de empresa</label>
                <select class="form-select" id="type" name="type">
                    <option value="1" {{ $experience->type == 1 ? 'selected' : '' }}>Pública</option>
                    <option value="2" {{ $experience->type == 2 ? 'selected' : '' }}>Privada</option>
                    <option value="3" {{ $experience->type == 3 ? 'selected' : '' }}>Mixta</option>
                    <option value="4" {{ $experience->type == 4 ? 'selected' : '' }}>Independiente</option>
                </select>            
            </div>
            <div class="col-md-8 mb-3">
                <label for="company" class="form-label">Empresa</label>
                <input type="text" class="form-control" id="company" name="company" value="{{ $experience->company }}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="location" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $experience->location }}">
            </div>
            <div class="col-md-3 mb-3">
                <label for="start_date" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $experience->start_date }}">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label mt-4"></label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="is_current" name="is_current" {{ $experience->is_current ? 'checked' : '' }}>
                    <label class="form-check label" for="is_current">¿Actual?</label>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="end_date" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $experience->end_date ? $experience->end_date : '' }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $experience->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
