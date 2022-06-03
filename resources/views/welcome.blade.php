<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/tooplate-gymso-style.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- Menu de navegacion superior principal -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">¿Quienes Somos?</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Tarifas</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Horarios</a>
                    </li>

                    <li class="nav-item">
                        <a href="#galeria" class="nav-link smoothScroll">Galeria</a>
                    </li>

                    <li class="nav-item">
                        <a href="#videos" class="nav-link smoothScroll">Videos</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contactanos</a>
                    </li>

                    {{-- Menu desplegable para usuarios registrados --}}
                    @auth
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                            {{ Auth::user()->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('user.perfil') }}">
                                    Mis Datos
                                </x-jet-dropdown-link>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @role('Administrador|Coach')
                                    <x-jet-dropdown-link href="{{ route('admin.usuarios') }}">
                                        Administrador
                                    </x-jet-dropdown-link>
                                @endrole

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    @endauth

                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>

    <x-jet-banner />

    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

        <div class="bg-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">

                        @auth
                            @if (!auth()->user()->perfil)
                                <div class="bg-gray-700 p-4 rounded-md flex justify-between items-center mb-5">
                                    <p class="text-white">TIENES INGRESAR EL RESTO DE TUS DATOS</p>
                                    <a href="{{ route('user.perfil') }}" class="btn btn-primary">Editar Perfil</a>
                                </div>
                            @endif
                        @endauth

                        <h6 data-aos="fade-up" data-aos-delay="300">¡Nueva Forma De Construir Un Estilo De Vida
                            Saludable!</h6>

                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">ENTRENA EN BOX88</h1>

                        <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up"
                            data-aos-delay="600">REGÍSTRATE</a>

                        <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up"
                            data-aos-delay="700">SABER MAS</a>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h1 class="mb-3 text-white text" data-aos="fade-up">Quieres ser nuevo miembro?</h1>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Registrate y ser parte de nosotros</h6>

                    @auth
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" class="btn custom-btn bg-color mt-3"
                                @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300"
                            data-toggle="modal" data-target="#membershipForm">¡Registrate Aqui!</a>

                        <a href="{{ route('login') }}" class="btn custom-btn bg-color mt-3" data-aos="fade-up"
                            data-aos-delay="300">¡Iniciar Sesión!</a>
                    @endauth

                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h1 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Horas De Servicio</h1>

                            <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Domingo :
                                Cerrado</strong>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Lunes -
                                Viernes</strong>

                            <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 9:00 AM | 5:00 PM - 9:00 PM</p>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Sabado</strong>

                            <p data-aos="fade-up" data-aos-delay="800">7:00 PM - 9:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="about section" id="about">
        <div class="container">
            <div class="row">

                <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                    <h1 class="mb-4" data-aos="fade-up" data-aos-delay="300">Misión:</h1>

                    <p data-aos="fade-up" data-aos-delay="400"> Nuestra misión es que los socios progresen de forma
                        constante y evolutiva su condición física, dándoles de una perfecta base física que les permita
                        afrontar cualquier reto. Optimizamos el potencial físico en todos nuestros usuarios hasta
                        límites inimaginables, retando su cuerpo y mente al punto de priorizar la actividad física en
                        sus vidas.</p>

                    <h1 class="mb-4 mt-4" data-aos="fade-up" data-aos-delay="300">Visión:</h1>

                    <p data-aos="fade-up" data-aos-delay="400"> Nuestra estrategia es tener centros de entrenamientos de
                        referencia nivel departamental en todas las especialidades de entrenamiento que practicamos
                        crossfit y entrenamiento funcional. Ponemos en marcha iniciativas constantes para la mejora y el
                        bienestar de todos los deportistas que depositan su confianza en nosotros y nos eligen como su
                        prioridad para sentirse bien.</p>

                    <h1 class="mb-4 mt-4" data-aos="fade-up" data-aos-delay="300">Objetivo:</h1>

                    <p data-aos="fade-up" data-aos-delay="400"> Nos enfocamos en ayudar a mejorar el estilo de vida de
                        las personas a través de la actividad física, desarrollando cada una de las cualidades de
                        nuestros usuarios.</p>

                    <h1 class="mb-4 mt-4" data-aos="fade-up" data-aos-delay="300">Valores:</h1>

                    <p data-aos="fade-up" data-aos-delay="400">

                    </p>
                    <ul>
                        <li>-Profesionalidad y honradez</li>
                        <li>-Alto grado de cualificación </li>
                        <li>-Compromiso de calidad integral (producto y servicio)</li>
                        <li>-Capacidad de trabajo -respuesta -eficiencia</li>
                        <li>-Compromiso y atención a nuestros socios</li>
                        <li>-Trabajo en equipo </li>
                    </ul>


                </div>

                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                    <div class="team-thumb">
                        <img src="images/coach.jpg" class="img-fluid" alt="Trainer">

                        <div class="team-info d-flex flex-column">

                            <h3>Alejandro Londoño</h3>
                            <span>Coach</span>

                            <ul class="social-icon mt-3">
                                <li><a href="https://www.facebook.com/jandro.diaz.90" target="_blank"
                                        class="fa fa-facebook"></a></li>
                                <li><a href="https://www.instagram.com/box88cross/?hl=es-la" target="_blank"
                                        class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up"
                    data-aos-delay="800">
                    <div class="team-thumb">
                        <img src="images/coach_2.jpg" class="img-fluid" alt="Trainer">

                        <div class="team-info d-flex flex-column">

                            <h3>Heyder Triana</h3>
                            <span>Staff</span>

                            <ul class="social-icon mt-3">
                                <li><a href="https://www.instagram.com/heydertriana09/?hl=es-la" target="_blank"
                                        class="fa fa-instagram"></a></li>
                                <li><a href="https://www.facebook.com/Crossfitero16/" target="_blank"
                                        class="fa fa-facebook"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- CLASS -->
    <section class="class section" id="class">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-5">
                    <h6 data-aos="fade-up">Nuevas Tarifas</h6>

                    <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="images/class/yoga-class.jpg" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Yoga</h3>

                            <span><strong>Trained by</strong> - Bella</span>

                            <span class="class-price">$50</span>

                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="class-thumb">
                        <img src="images/class/crossfit-class.jpg" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Areobic</h3>

                            <span><strong>Trained by</strong> - Mary</span>

                            <span class="class-price">$66</span>

                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="class-thumb">
                        <img src="images/class/cardio-class.jpg" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Cardio</h3>

                            <span><strong>Trained by</strong> - Cathe</span>

                            <span class="class-price">$75</span>

                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SCHEDULE -->
    <section class="schedule section" id="schedule">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h6 data-aos="fade-up">our weekly GYM schedules</h6>

                    <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                </div>

                <div class="col-lg-12 py-5 col-md-12 col-12">
                    <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up"
                        data-aos-delay="300">

                        <thead class="thead-light">
                            <th><i class="fa fa-calendar"></i></th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td><small>7:00 am</small></td>
                                <td>
                                    <strong>Cardio</strong>
                                    <span>7:00 am - 9:00 am</span>
                                </td>
                                <td>
                                    <strong>Power Fitness</strong>
                                    <span>7:00 am - 9:00 am</span>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <strong>Yoga Section</strong>
                                    <span>7:00 am - 9:00 am</span>
                                </td>
                            </tr>

                            <tr>
                                <td><small>9:00 am</small></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <strong>Boxing</strong>
                                    <span>8:00 am - 9:00 am</span>
                                </td>
                                <td>
                                    <strong>Areobic</strong>
                                    <span>8:00 am - 9:00 am</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Cardio</strong>
                                    <span>8:00 am - 9:00 am</span>
                                </td>
                            </tr>

                            <tr>
                                <td><small>11:00 am</small></td>
                                <td></td>
                                <td>
                                    <strong>Boxing</strong>
                                    <span>11:00 am - 2:00 pm</span>
                                </td>
                                <td>
                                    <strong>Areobic</strong>
                                    <span>11:30 am - 3:30 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Body work</strong>
                                    <span>11:50 am - 5:20 pm</span>
                                </td>
                            </tr>

                            <tr>
                                <td><small>2:00 pm</small></td>
                                <td>
                                    <strong>Boxing</strong>
                                    <span>2:00 pm - 4:00 pm</span>
                                </td>
                                <td>
                                    <strong>Power lifting</strong>
                                    <span>3:00 pm - 6:00 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Cardio</strong>
                                    <span>6:00 pm - 9:00 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <strong>Crossfit</strong>
                                    <span>5:00 pm - 7:00 pm</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                    <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400"
                        role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="Name">

                        <input type="email" class="form-control" name="cf-email" placeholder="Email">

                        <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Send
                            Message</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find
                            us</span></h2>

                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> 120-240 Rio de
                        Janeiro - State of Rio de Janeiro, Brazil</p>
                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe
                            src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-4 col-md-5">
                    <p class="copyright-text">Copyright &copy; 2020 Gymso Fitness Co.

                        <br>Design: <a href="https://www.tooplate.com">Tooplate</a>
                    </p>
                </div>

                <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                    <p class="mr-4">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="#">hello@company.co</a>
                    </p>

                    <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title" id="membershipFormLabel">Formulario de Membresia</h2>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}" class="membership-form webform"
                        role="form">
                        @csrf

                        <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                            class="form-control" placeholder="Nombre de Usuario">

                        <input type="text" name="apellido" :value="old('apellido')" required autofocus
                            autocomplete="apellido" class="form-control" placeholder="Apellido">

                        <input type="text" name="identificacion" :value="old('identificacion')" required autofocus
                            autocomplete="identificacion" class="form-control"
                            placeholder="Numero de Identificación">

                        <input type="date" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required autofocus
                            autocomplete="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento">

                        <input type="email" name="email" :value="old('email')" required class="form-control"
                            placeholder="Correo Electronico">

                        <input type="password" name="password" required autocomplete="new-password"
                            class="form-control" placeholder="Contraseña">

                        <input type="password" type="password" name="password_confirmation" required
                            autocomplete="new-password" class="form-control" placeholder="Confirmar Contraseña">
                        {{-- <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required> --}}

                        <button type="submit" class="form-control" id="submit-button"
                            name="submit">Registrarse</button>
                    </form>
                </div>

                <div class="modal-footer"></div>

            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
    <!-- SCRIPTS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('') }}js/aos.js"></script>
    <script src="{{ asset('') }}js/smoothscroll.js"></script>
    <script src="{{ asset('') }}js/custom.js"></script>
</body>

</html>
