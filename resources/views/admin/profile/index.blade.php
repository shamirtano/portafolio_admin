@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Perfil</h1>
    <div class="profile-item">
        @if (isset($profile))
            <h3>{{ $profile->name }}</h3>
            <p>{{ $profile->title }}</p>
            <p>{{ $profile->email }}</p>
            <p>{{ $profile->phone }}</p>
            <p>{{  $profile->mobile }}</p>
            <p>Github: {{ $profile->github ?? 'No registrado' }}, Linkedin: {{ $profile->linkedin ?? 'No registrado' }}, Sitio web: {{ $profile->website ?? 'No registrado' }}</p>
            <p>{{ $profile->address }}</p>
            <p>{{ $profile->bio }}</p>

            <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver</a>
        @else
            <p>No se ha creado un perfil</p>            
            <a href="{{ route('profile.create') }}" class="btn btn-primary">Crear Perfil</a>
        @endif
    </div>
</div>
@endsection