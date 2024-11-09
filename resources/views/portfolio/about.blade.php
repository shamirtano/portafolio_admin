@extends('layouts.page')

@section('content')
    <section class="about" id="about">
        <div class="container-section">
            <h2>Acerca de mí</h2>
            <p><span>Hola, soy {{ $profile->first_name }}.</span> {!! $profile->bio !!}</p>

            <div class="row">
                <div class="col">
                    <h3>Información Personal</h3>
                    <ul>
                        <li><strong>Nombre:</strong> {{ $profile->first_name }} {{ $profile->last_name }}</li>
                        <li><strong>Profesión:</strong> {{ $profile->title }}</li>
                        <li><strong>Cumpleaños:</strong> {{ $profile->birthday_date }}</li>
                        <li><strong>Edad:</strong> {{ $profile->age }} años</li>
                        <li><strong>Residencia:</strong> {{ $profile->address }}</li>
                        <li><strong>Email:</strong> {{ $profile->email }}</li>
                        <li><strong>Telefono:</strong> {{ $profile->phone ?? 'Ninguno' }}</li>
                        <li><strong>Celular</strong> {{ $profile->mobile ?? 'Ninguno' }}</li>
                        <li><strong>Cargo:</strong><span>{{ $profile->last_job }}</span></li>
                    </ul>
                </div>

                <div class="col">
                    <h3>Intereses</h3>
                    <div class="container-intereses">
                        {{-- @foreach ($interests as $interest)
                        <div class="interes">
                            <i class="fa-solid fa-heart"></i>
                            <p>{{ $interest->name }}</p>
                        </div>
                    @endforeach --}}
                        <div class="interes">
                            <i class="fa-solid fa-gamepad"></i>
                            <span>Videojuegos</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-headphones"></i>
                            <span>Música</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-book"></i>
                            <span>Lectura</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-film"></i>
                            <span>Películas</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-plane"></i>
                            <span>Viajar</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-person-hiking"></i>
                            <span>Senderismo</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-futbol"></i>
                            <span>Deportes</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-car"></i>
                            <span>Autos</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Download CV --}}
            <button>
                Descargar CV <i class="fa-solid fa-download"></i>
                <span class="overlay"></span>
            </button>
        </div>
    </section>
@endsection
