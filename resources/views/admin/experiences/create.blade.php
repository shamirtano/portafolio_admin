@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Agregar Nueva Experiencia</h1>

    <form action="{{ route('experiences.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="type" class="form-label">Tipo de empresa</label>
                <select class="form-select" id="type" name="type">
                    <option selected>Selecciona un tipo</option>
                    <option value="1">Pública</option>
                    <option value="2">Privada</option>
                    <option value="3">Mixta</option>
                    <option value="4">Independiente</option>                
                </select>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-8 mb-3">
                <label for="company" class="form-label">Empresa</label>
                <input type="text" class="form-control" id="company" name="company">
                @error('company')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="location" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="location" name="location">
                @error('location')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-3 mb-3">
                <label for="start_date" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="start_date" name="start_date">
                @error('start_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>            
            <div class="col-md-2 mb-3">
                <label class="form-label"></label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="is_current" name="is_current">
                    <label class="form-check-label" for="is_current">¿Actual?</label>
                </div>                
            </div>
            <div class="col-md-3 mb-3">
                <label for="end_date" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" id="end_date" name="end_date">
                @error('end_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>            
            <div class="col-md-12 mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
