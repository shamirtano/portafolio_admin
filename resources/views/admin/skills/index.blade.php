@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Habilidades</h1>
    <a href="{{ route('skills.create') }}" class="btn btn-primary mb-3">Agregar Habilidad</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Porcentaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $skill)
                <tr>
                    <td>{{ $skill->id }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->percentage }}</td>
                    <td>
                        <a href="{{ route('skills.edit', $skill) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('skills.destroy', $skill) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta habilidad?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
