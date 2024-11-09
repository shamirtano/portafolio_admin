@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Experiencias</h1>
    <a href="{{ route('experiences.create') }}" class="btn btn-primary mb-3">Agregar Experiencia</a>

    <table class="table">
        <thead>
            <tr>
                <th>Tipo de<br>Empresa</th>
                <th>Empresa</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($experiences as $experience)
                <tr>
                    <td>{{ $experience->type }}</td>
                    <td>{{ $experience->company }}</td>
                    <td>{{ $experience->start_date }}</td>
                    <td>{{ $experience->end_date ? $experience->end_date : 'Actualidad' }}</td>
                    <td>
                        <a href="{{ route('experiences.edit', $experience) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('experiences.destroy', $experience) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta experiencia?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
