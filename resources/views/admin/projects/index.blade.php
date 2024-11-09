@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Proyectos</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Agregar Proyecto</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Título</th>
                <th>URL</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>
                        <img src="{{ asset($project->image) }}" class="img-thumbnail" style="max-width: 100px;">
                    </td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->url }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este proyecto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
