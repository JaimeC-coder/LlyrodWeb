<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="language" content="es">
    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

    @yield('styles')
</head>

<body>
    @include('layouts.nav')
    <div >
        @yield('content')
    </div>
    @include('layouts.footer')



    @yield('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const menu = document.getElementById('menu');
            const navSection = document.getElementById('navSection');

            menuToggle.addEventListener('click', function() {
                menu.classList.toggle('active');
            });

            window.addEventListener('scroll', function() {
                if (window.scrollY > 0) {
                    navSection.classList.add('fixed-navbar');
                } else {
                    navSection.classList.remove('fixed-navbar');
                }
            });
        });
    </script>
    <script>
        AOS.init();
      </script>

</body>

</html>
