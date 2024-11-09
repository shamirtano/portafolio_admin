@extends('layouts.page')

@section('content')
    <!-- Sección de Perfil o pagina de inicio -->
    <section id="profile" class="profile">
        <div class="container-banner">
            <div class="container-img">
                <img src="{{ isset($profile->avatar) ? asset('assets/img/') . $profile->avatar : asset('assets/img/img-profile.png') }}"
                    alt="Nombre">
            </div>
            <h1>{{ $profile->first_name ?? 'Nombre' }} {{ $profile->last_name ?? 'Apellidos' }}</h1>
            <h2>{{ $profile->title ?? 'Profesión' }}</h2>
            <div class="redes">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-solid fa-rss"></i></a>
            </div>
        </div>
    </section>

    <!-- Sección de Acerca de mí -->
    <section class="about" id="about">
        <div class="container-section">
            <h2>Acerca de mí</h2>
            @if ($profile)
                <p><span>Hola, soy {{ $profile->first_name }}.</span> {!! $profile->bio !!}</p>
            @else
                <p>Información personal...</p>
            @endif

            <div class="row">
                <div class="col">
                    <h3>Información Personal</h3>
                    @if ($profile)
                        <ul>
                            <li><strong>Nombre:</strong> {{ $profile->first_name }} {{ $profile->last_name }}</li>
                            <li><strong>Profesión:</strong> {{ $profile->title }}</li>
                            <li class="capitalize"><strong>Cumpleaños:</strong> {{ $profile->birthday_date }}</li>
                            <li><strong>Edad:</strong> {{ $profile->age }} años</li>
                            <li><strong>Residencia:</strong> {{ $profile->address }}</li>
                            <li><strong>Email:</strong>
                                <a href="mailto:{{ $profile->email }}" target="_blank" style="color: #fff;">
                                    {{ $profile->email }}
                                </a>
                            </li>
                            <li><strong>Telefono:</strong> {{ $profile->phone ?? 'Ninguno' }}</li>
                            <li><strong>Celular</strong> {{ $profile->mobile ?? 'Ninguno' }}</li>
                            <li><strong>Cargo:</strong><span>{{ $profile->last_job }}</span></li>
                        </ul>
                    @else
                        <ul>
                            <li><strong>Nombre:</strong> Nombre Apellidos</li>
                            <li><strong>Profesión:</strong> Profesión</li>
                            <li><strong>Cumpleaños:</strong> 01/01/1990</li>
                            <li><strong>Edad:</strong> 30 años</li>
                            <li><strong>Residencia:</strong> Dirección</li>
                            <li><strong>Email:</strong>
                                <a href="mailto:noemail@mail.com" target="_blank" style="color: #fff;">noemail@mail.com</a>
                            </li>
                            <li><strong>Telefono:</strong> 123456789</li>
                            <li><strong>Celular</strong> 123456789</li>
                            <li><strong>Cargo:</strong><span>Último cargo</span></li>
                        </ul>
                    @endif
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

    <!-- Sección Habilidades -->
    <section class="skills" id="skills">
        <div class="container-section">
            <h2>Habilidades (Skills)</h2>
            <div class="row">
                <!-- Habilidades Técnicas -->
                <div class="col">
                    <h3>Habilidades Técnicas</h3>
                    <div class="skill">
                        <span>Javascript</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>PHP</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Python</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Java</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>Habilidades blandas</h3>
                    <div class="skill">
                        <span>Trabajo en equipo</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Comunicación</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Resolución de problemas</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Adaptabilidad</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>Idiomas</h3>
                    <div class="skill">
                        <span>Español</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Ingles</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>Frameworks</h3>
                    <div class="skill">
                        <span>Laravel</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>React</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Vue</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Angular</span>
                        <div class="progress-bar">
                            <div class="progress">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education">
        <h2>Educación</h2>
        <ul>
            @foreach ($educations as $education)
                <li>
                    <h3>{{ $education->degree }} - {{ $education->institution }}</h3>
                    <p>{{ $education->start_date }} - {{ $education->end_date ? $education->end_date : 'En curso' }}</p>
                    <p>{{ $education->location }}</p>
                    <p>{{ $education->description }}</p>
                </li>
            @endforeach
        </ul>
    </section>

    <section id="experience">
        <h2>Experiencia</h2>
        @foreach ($experiences as $experience)
            <div>
                <h3>{{ $experience->type }} en {{ $experience->company }}</h3>
                <p>{{ $experience->start_date }} - {{ $experience->end_date ? $experience->end_date : 'Actualidad' }}</p>
                <p>{{ $experience->description }}</p>
            </div>
        @endforeach
    </section>

    <section id="projects">
        <h2>Proyectos Destacados</h2>
        @foreach ($projects as $project)
            <div>
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                @if ($project->url)
                    <a href="{{ $project->url }}" target="_blank">Ver Proyecto</a>
                @endif
            </div>
        @endforeach
    </section>
@endsection
