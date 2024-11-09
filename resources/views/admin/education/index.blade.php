@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Educación</h1>
    <a href="{{ route('education.create') }}" class="btn btn-primary mb-3">Agregar Educación</a>

    <table class="table">
        <thead>
            <tr>
                <th>Grado</th>
                <th>Título</th>
                <th>Institución</th>
                <th>Ciudad</th>
                <th>¿Terminado?</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($educations as $education)
                <tr>
                    <td>{{ $education->degree }}</td>
                    <td>{{ $education->title }}</td>
                    <td>{{ $education->institution }}</td>
                    <td>{{ $education->location }}</td>
                    <td class="text-center">
                        @if ($education->finished == 1)
                            <span class="badge text-bg-success">Sí</span>
                        @else
                            <span class="badge text-bg-danger">No</span>
                        @endif
                    </td>
                    <td>{{ $education->start_date }}</td>
                    <td>{{ $education->end_date != null ? $education->end_date : 'En curso' }}</td>
                    <td>
                        <a href="{{ route('education.edit', $education) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('education.destroy', $education) }}" method="POST" style="display:inline;">
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
