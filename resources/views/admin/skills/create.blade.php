@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Agregar Nueva Habilidad</h1>

    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="percentage" class="form-label">Porcentaje</label>
            <input type="number" class="form-control" id="percentage" name="percentage" value="{{ old('percentage') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('skills.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
