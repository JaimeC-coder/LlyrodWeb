@extends('layouts.body')

@section('title', $pageTitle)

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/somos.css') }}">
<link rel="stylesheet" href="{{ asset('css/youtube.css') }}">
@endsection

@section('content')

<section class="imageSection">
    <div class="imageContainer">
        <div class="degradadoPortafolioTop"></div>
        <video src="{{ asset('assets/video/video_home.mp4') }}" class="imagen" muted loop autoplay></video>

        <div class="textandGraph">
            <div class="texto">
                <span class="textoSecundario">Transformamos Desafíos en Oportunidades:</span>
                <span class="textoPrincipal">
                    En <strong>Grupo Llyrod</strong>, creemos en el poder de la innovación y el talento joven para impulsar el cambio y el crecimiento sostenible.
                    Somos una consultora especializada que combina experiencia técnica y tecnología de vanguardia para ofrecer soluciones que trascienden lo convencional.
                </span>

                <span class="textoPrincipalmovil">
                    En <strong>Grupo Llyrod</strong>, Somos una consultora que impulsa el cambio y el crecimiento sostenible,
                    combinando talento joven, experiencia técnica y tecnología avanzada para ofrecer soluciones innovadoras.
                </span>
                <a class="buttonVer" href="/industrias">Ver más</a>
            </div>
        </div>
    </div>
</section>

<section class="cardsSection">
    <div class="cardsContainer">
        @foreach ($cards as $card)
        <div class="linkCard" onclick="window.location.href='/nuestro_trabajo#{{ $card['id']}}'" style="transform: translateY(-1px) translateZ(0px);">
            <div class="imageContainerCards">
                <div class="degradadoPortafolioTopCards"></div>
                <img src="{{ asset($card['imagen']) }}" class="imagenCard" alt="Imagen Home">
                <div class="textoCard">
                    <span class="cardTittle">{{ $card['tittle'] }}</span>
                    <a href="/industrias#{{ $card['id'] }}" class="buttonAccordion">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="infoSection" id="somos">
    @include('home.somos')
    <br>
    <br>
    <br>
    @include('home.youtube')
</section>



@endsection

