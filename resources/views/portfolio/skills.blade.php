@extends('layouts.page')

@section('content')
<div class="container">
    <h1>Habilidades</h1>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill->name }} - Nivel: {{ $skill->level }}%</li>
        @endforeach
    </ul>
</div>
@endsection
