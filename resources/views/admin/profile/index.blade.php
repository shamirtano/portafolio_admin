@extends('layouts.admin')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h4>Perfil</h4>
            </div>
            @if (isset($profile))
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ isset($profile->image) ? asset('storage/' . $profile->image) : asset('assets/img/img-profile.png') }}"
                                class="img-thumbnail" alt="Imagen de perfil">
                        </div>
                        <div class="col-md-9">
                            <h3 class="text-success">{{ $profile->first_name }} {{ $profile->last_name }}</h3>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <h6 class="profile-item">
                                        <i class="fa-solid fa-graduation-cap me-2"></i>
                                        {{ $profile->title ? $profile->title : 'No hay título registrado' }}
                                    </h6>
                                    <h6 class="profile-item">
                                        <i class="fa-solid fa-briefcase me-2"></i>
                                        {{ $profile->last_job ? $profile->last_job : 'No hay último trabajo registrado' }}
                                    </h6>
                                    <h6 class="profile-item">
                                        <i class="fa-solid fa-envelope me-2"></i>
                                        @if ($profile->email)
                                            <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a>
                                        @else
                                            No hay correo registrado
                                        @endif
                                    </h6>
                                    <h6 class="profile-item">
                                        <i class="fa-solid fa-phone me-2"></i>
                                        {{ $profile->phone ? $profile->phone : 'No hay teléfono registrado' }}
                                    </h6>
                                    <h6 class="profile-item">
                                        <i class="fa-solid fa-mobile me-2"></i>
                                        {{ $profile->mobile ? $profile->mobile : 'No hay móvil registrado' }}
                                    </h6>
                                    <h6 class="profile-item">
                                        <i class="fa-solid fa-calendar me-2"></i>
                                        {{ $profile->birthday ? ucfirst($profile->birthday) : 'No hay fecha de nacimiento registrada' }}
                                    </h6>
                                    <h6 class="profile-item">
                                        <i class="fa-solid fa-map-marker me-2"></i>
                                        {{ $profile->address ? $profile->address : 'No hay dirección registrada' }}
                                    </h6>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <h5 class="text-success">Habilidades</h5>
                                    <ul>
                                        @if ($profile->skills)
                                            @foreach ($profile->skills as $skill)
                                                <li class="badge bg-success">{{ $skill->name }}</li>
                                            @endforeach
                                        @else
                                            <li class="badge bg-primary">No hay habilidades registradas</li>
                                        @endif
                                    </ul>

                                    <h5 class="text-success mt-2">Redes sociales</h5>
                                    <ul>
                                        <li class="profile-item">
                                            <i class="fa-brands fa-github"></i>
                                            Github: {{ $profile->github ?? 'No registrado' }}
                                        </li>
                                        <li class="profile-item">
                                            <i class="fa-brands fa-linkedin"></i>
                                            Linkedin: {{ $profile->linkedin ?? 'No registrado' }}
                                        </li>
                                        <li class="profile-item">
                                            <i class="fa-solid fa-globe"></i>
                                            Sitio web: {{ $profile->website ?? 'No registrado' }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <h5 class="text-success">Biografía</h5>
                            <p>{!! $profile->bio !!}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('profile.edit', $profile) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver</a>
                    </div>
                @else
                    <p>No se ha creado un perfil</p>
                    <a href="{{ route('profile.create') }}" class="btn btn-primary">Crear Perfil</a>
            @endif
        </div>
    @endsection
