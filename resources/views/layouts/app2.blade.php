<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css') }}">

    @yield('page_css')

    <!-- Inline CSS -->
    <style>
        .toolbar {
            float: left;
        }
        .searching {
            float: right;
        }
        .navbar-bg {
            background-color: rgb(255, 255, 255); /* Ajusta el color de fondo según sea necesario */
            height: 80px; /* Ajusta la altura para que se adapte al tamaño del logo */
            background-image: url('{{ asset('img/footer-Sat.png') }}'); /* Ruta del logo */
            background-size: contain; /* Ajusta el tamaño del logo para que se ajuste al contenedor */
            background-position: center; /* Centra el logo en el contenedor */
            background-repeat: no-repeat; /* Evita que el logo se repita */
            background-blend-mode: multiply; /* Mezcla el color de fondo y el logo si es necesario */
        }
        .main-navbar {
            border: none; /* Elimina bordes del navbar si es necesario */
        }
    </style>

    @yield('css')
</head>
<body>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <!-- Navbar -->
        <div class="navbar-bg">
            <!-- Logo está en el fondo de esta sección -->

        </div>

        <nav class="navbar navbar-expand-lg main-navbar">
            <!-- Puedes añadir elementos adicionales en el navbar si es necesario -->
        </nav>

        <!-- Sidebar -->
        <div class="main-sidebar main-sidebar-postion">
            @include('layouts.sidebar')
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        {{-- <footer class="main-footer">
            @include('layouts.footer')
        </footer> --}}
    </div>
</div>

@include('profile.change_password')
@include('profile.edit_profile')

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('web/js/stisla.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
<script src="{{ mix('assets/js/profile.js') }}"></script>
<script src="{{ mix('assets/js/custom/custom.js') }}"></script>
<script src="{{ asset('assets/js/custom/buscador.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@yield('page_js')
@yield('scripts')

<script>
    let loggedInUser = @json(\Illuminate\Support\Facades\Auth::user());
    let loginUrl = '{{ route('login') }}';

    // Plugin de botón de carga
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
</script>

</body>
</html>
