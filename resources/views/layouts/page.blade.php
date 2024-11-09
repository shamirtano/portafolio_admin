<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Mi portafolio personal">
    <meta name="keywords" content="portafolio, curriculum, proyectos, habilidades">
    <meta name="author" content="Shamir Tano Morales">
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/8e19469c3f.js" crossorigin="anonymous"></script>
    <title>Mi Portafolio</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="container-header">
        <header>
            <div class="logo">
                <a href="#">{{ isset($profile->first_name) ? $profile->first_name : 'Nombre' }}</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="{{ route('portfolio.index') }}">Inicio</a></li>
                    <li><a href="{{ route('portfolio.about') }}">Acerca de mí</a></li>
                    <li><a href="{{ route('portfolio.education') }}">Educación</a></li>
                    <li><a href="{{ route('portfolio.skills') }}">Habilidades</a></li>
                    <li><a href="{{ route('portfolio.experience') }}">Experiencia</a></li>
                    <li><a href="{{ route('portfolio.projects') }}">Proyectos</a></li>
                    <li><a href="{{ route('portfolio.contact') }}">Contacto</a></li>
                </ul>
            </nav>
            <div class="nav-responsive">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    @yield('content')

    <!-- FOOTER -->
    <footer class="text-center mt-5 fixed-bottom">
        <p>&copy; {{ date('Y') }} Mi Portafolio</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>
