@extends('layouts.page')

@section('content')
<div class="container">
    <h1>Experiencia Profesional</h1>
    @foreach ($experiences as $experience)
        <div>
            <h3>{{ $experience->type }} en {{ $experience->company }}</h3>
            <p>{{ $experience->start_date }} - {{ $experience->end_date ? $experience->end_date : 'Actualidad' }}</p>
            <p>{{ $experience->description }}</p>
        </div>
    @endforeach
</div>
@endsection
