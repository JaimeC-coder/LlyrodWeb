@extends('layouts.body')


@section('meta')
    <meta name="robots" content="{{ $metaData['robots'] }}">
    <meta name="description" content="{{ $metaData['description'] }}">
    <meta name="keywords" content="{{ $metaData['keywords'] }}">

    <!-- Open Graph Meta Tags -->
    @foreach ($metaData['og'] as $og)
        <meta property="og:{{ $og['type'] }}" content="{{ $og['content'] }}">
    @endforeach

    <!-- Twitter Meta Tags -->
    @foreach ($metaData['twitter'] as $twitter)
        <meta name="twitter:{{ $twitter['type'] }}" content="{{ $twitter['content'] }}">
    @endforeach

    <title>{{ $metaData['title'] }}</title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <div class="content">
        <div class="contentImage"  style="background-image: url('{{ asset('assets/img/home/contact.webp') }}');">
            <div class="contentText">
                <p>Contacta a Grupo Llyrod</p>
            </div>
        </div>
        <div class="contentInformation">
            <div class="contactinfo">
                <div class="titulo">
                    <p> Información de contacto</p>
                </div>
                <div class="information">

                    <div class="info">
                        <p> <i class="bi bi-telephone-inbound-fill"></i> +51 032 940 000</p>
                    </div>
                    <div class="info">
                        <p><i class="bi bi-envelope-at-fill"></i> xxxxx@grupollyrod.com
                    </div>

                </div>
            </div>
            <div class="contactForm">
                <div class="container">
                    <form id="formulario-contacto">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="correo">Correo electrónico:</label>
                        <input type="email" id="correo" name="correo" required>

                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" required></textarea>

                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




@section('scripts')
    <script>
        document.getElementById('archivos').addEventListener('change', function(e) {
            var lista = document.getElementById('archivo-lista');
            lista.innerHTML = '';
            for (var i = 0; i < this.files.length; i++) {
                lista.innerHTML += this.files[i].name + '<br>';
            }
        });

        document.getElementById('formulario-contacto').addEventListener('submit', function(e) {
            e.preventDefault();
            // Aquí iría el código para enviar el formulario
            console.log('Formulario enviado');
            alert('Formulario enviado con éxito!');
        });
    </script>
@endsection
