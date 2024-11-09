@extends('layouts.page')

@section('content')
<div class="container">
    <h1>Proyectos</h1>
    @foreach ($projects as $project)
        <div>
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
            @if($project->url)
                <a href="{{ $project->url }}" target="_blank">Ver Proyecto</a>
            @endif
        </div>
    @endforeach
</div>
@endsection
