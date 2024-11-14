@extends('layouts.body')

@section('title', $pageTitle)

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/somos.css') }}">
<link rel="stylesheet" href="{{ asset('css/youtube.css') }}">
<link rel="stylesheet" href="{{ asset('css/clients.css') }}">
<link rel="stylesheet" href="{{ asset('css/cardSection.css') }}">
@endsection

@section('content')


<section class="imageSection">
    <div class="imageContainer">
        <video src="{{ asset('assets/video/video_home.mkv') }}" class="imagen" muted loop autoplay loading="lazy"></video>
        <div class="degradadoPortafolioTop"></div>
        <div class="textandGraph">
            <div class="texto">
                <span class="textoSecundario">Transformamos desafíos en oportunidades</span>
                <span class="textoPrincipal">
                    En <strong>Grupo Llyrod</strong>, creemos en el poder de la innovación y el talento joven para impulsar el cambio y el crecimiento sostenible.
                    Somos una consultora especializada que combina experiencia técnica y tecnología de vanguardia para ofrecer soluciones que trascienden lo convencional.
                </span>

                <span class="textoPrincipalmovil">
                    En <strong>Grupo Llyrod</strong>, Somos una consultora que impulsa el cambio y el crecimiento sostenible,
                    combinando talento joven, experiencia técnica y tecnología avanzada para ofrecer soluciones innovadoras.
                </span>
                <a class="buttonVer" href="/nuestro_trabajo">ver más</a>
            </div>
        </div>
    </div>
</section>


<section class="cardSection">
  @include('home.cardSection')
</section>

<section class="infoSection" id="somos">
    @include('home.somos')

    @include('home.clients')


    @include('home.youtube')
</section>



@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardGrid = document.querySelector('.cardGrid');
            console.log(cardGrid);
            let scrollAmount = 0;
            const scrollStep = 2; // Cantidad de píxeles por desplazamiento
            const maxScrollLeft = cardGrid.scrollWidth - cardGrid.clientWidth;

            function autoScroll() {
                scrollAmount += scrollStep;
                if (scrollAmount >= maxScrollLeft) {
                    scrollAmount = 0; // Reinicia el desplazamiento al inicio
                }
                cardGrid.scrollLeft = scrollAmount;
            }

            // Ajusta la velocidad del desplazamiento (ms)
            setInterval(autoScroll, 20);
        });
    </script>


<script>
    const video = document.getElementById("myVideo");

    // Muestra los controles cuando se hace hover
    video.addEventListener("mouseenter", () => {
      video.controls = true;
    });

    // Oculta los controles cuando se quita el hover
    video.addEventListener("mouseleave", () => {
      video.controls = false;
    });

    // Reproduce o pausa el video al hacer click
    video.addEventListener("click", () => {
      if (video.paused) {
        video.play();
      } else {
        video.pause();
      }
    });
  </script>
@endsection
