@extends('layouts.page')

@section('content')
<div class="container">
    <h1>Educación</h1>
    @foreach ($educations as $edu)
        <div class="education-item">
            <h3>{{ $edu->degree }} - {{ $edu->institution }}</h3>
            <p>{{ $edu->start_date }} - {{ $edu->end_date ? $edu->end_date : 'En curso' }}</p>
            <p>{{ $edu->location }}</p>
            <p>{{ $edu->description }}</p>
        </div>
    @endforeach
</div>
@endsection
