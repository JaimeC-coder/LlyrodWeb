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
                        <p><i class="fa-solid fa-phone-volume fa-lg"></i> +51 922 856 403</p>
                    </div>
                    <div class="info">
                        <p><i class="fa-solid fa-envelope-circle-check fa-lg"></i> administracion@grupollyrod.com
                    </div>

                </div>
                <div class="titulo">
                    <p>Síguenos en las redes sociales</p>
                </div>
                <div class="information">

                    <div class="info">
                        <p>Únete a la conversación en <a href="https://www.facebook.com/grupollyrod">Facebook</a> , <a href="https://www.linkedin.com/company/grupo-llyrod/"> LinkedIn</a> o visitanos en <a href="https://www.youtube.com/@GrupoLlyrod">YouTube</a>.</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <div class="container">

                    @if (session('mensaje'))
                        <div class="alert alert-success">
                            {{ session('mensaje') }}
                        </div>
                    @endif
                    <form id="formulario-contacto" action="{{ route('contactPost') }}" method="POST">
                        @csrf
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






