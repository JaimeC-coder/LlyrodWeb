@extends('layouts.body')

@section('title', $pageTitle)

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/industria.css') }}">
@endsection

@section('content')
    <div class="photosContainer">
        <section class="photoSection" id="mineria">
            <div class="photoContainer">
                <img class="photo" src="{{ asset('assets/industrial/mineria/titulo.webp') }}" alt="Minería" loading="lazy">
                <div class="degradadoPortafolioTop1"></div>
                <div class="textContent">
                    <div class="text">
                        <h2 class="titlePrincipal">Minería & Gestión Social</h2>
                        <p class="textPrincipalIndustrias">
                            Desarrollamos estudios especializados y proyectos destinados a atender la zona de influencia
                            directa
                            e indirecta de mina. Nuestros estandares secundan las politicas corporativas de alto nivel.
                            Orientamos el desarrollo de nuestros proyectos e intervenciones bajo un enfoque ESG:
                            Enviromental,
                            Social and Governance.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="informationContainer">
        <section class="cardsSection">
            <div class="cardsContainer">
                @foreach ($cardsMineria as $card)
                    <div class="{{ $loop->even ? 'contentpar' : 'content' }}">
                        <img class="photo" src="{{ asset($card['fondo']) }}" alt="Minería" loading="lazy">
                        <div class="degradadoPortafolioTop1"></div>
                        <div class="{{ $loop->even ? 'containerCardCarrucel1par' : 'containerCardCarrucel1' }}">
                            <div class="cardContainer1">
                                <h2>{{ $card['tittle'] }}</h2>
                                <p>
                                    {{ $card['texto'] }}
                                </p>
                            </div>
                            <div class="carouselConteiner1">
                                <div class="carouselInner1">
                                    @foreach ($card['imagenes'] as $img)
                                        <img src="{{ asset($img['imagen']) }}" class="carousel-image" alt="Card Title 1"
                                            loading="lazy">
                                    @endforeach
                                </div>
                                <button class="carousel-button prev">&lt;</button>
                                <button class="carousel-button next">&gt;</button>
                                <div class="carousel-dots"></div>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>


    <!-- Due Diligence Section -->
    <div class="photosContainer">
        <div class="photosContainer">
            <section class="photoSection" id="due_diligence">
                <div class="photoContainer">
                    <img class="photo"src="{{ asset('assets/industrial/inteligenciaNegocios/titulo.webp') }}"
                        alt="Due Diligence" loading="lazy">
                    <div class="degradadoPortafolioTop1"></div>
                    <div class="textContent">
                        <div class="text">
                            <h2 class="titlePrincipal">Due Diligence</h2>
                            <p class="textPrincipalIndustrias">
                                Desarrollamos estudios especializados y proyectos destinados a atender la zona de influencia
                                directa
                                e indirecta de mina. Nuestros estandares secundan las politicas corporativas de alto nivel.
                                Orientamos el desarrollo de nuestros proyectos e intervenciones bajo un enfoque ESG:
                                Enviromental,
                                Social and Governance.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="informationparContainer">

        <div class="cardContainer">


            <div class="cardsContainer">
                @foreach ($cardsTecnologia as $card)
                    <div class="card">
                        <img src="{{ asset($card['imagenes']['imagen']) }}" alt="Imagen Home" loading="lazy" />
                        <div class="overlay"></div>
                        <p class="content">
                            <span>{{ $card['tittle'] }}</span>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="photosContainer">
        <section class="photoSection" id="due_diligence">
            <div class="photoContainer">
                <img class="photo" src="{{ asset('assets/industrial/tranformacionDigital/titulo.webp') }}" loading="lazy"
                    alt="Tecnología">
                <div class="degradadoPortafolioTop1"></div>
                <div class="textContent">
                    <div class="text">
                        <h2 class="titlePrincipal">Transformación digital & IA</h2>
                        <p class="textPrincipalIndustrias">
                            Grupo Llyrod es un punto de encuentro para mentes inquisitivas y apasionadas. Aquí, nuestros
                            equipos y colaboradores exploran ideas vanguardistas, desarrollan soluciones disruptivas y
                            forjan alianzas estratégicas para el futuro. Fomentamos la experimentación y el aprendizaje
                            constante, brindando un entorno que nutre la innovación y el crecimiento.
                            Utilizamos sistemas de gestión de datos y análisis avanzados para recopilar información valiosa
                            sobre el rendimiento de nuestras operaciones, lo que nos permite tomar decisiones más acertadas
                            y basadas en datos en tiempo real.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="informationparContainer">

        <div class="cardContainer">

            <div class="cardsContainer">
                @foreach ($cardsBi as $card)
                    <div class="card">
                        <img src="{{ asset($card['imagenes']['imagen']) }}" alt="Imagen Home" loading="lazy" />
                        <div class="overlay"></div>
                        <p class="content">
                            <span>{{ $card['tittle'] }}</span>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



@endsection


@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousels = document.querySelectorAll('.carouselConteiner1');

            carousels.forEach((container) => {
                const carousel = container.querySelector('.carouselInner1');
                const images = carousel.querySelectorAll('img');
                const prevButton = container.querySelector('.prev');
                const nextButton = container.querySelector('.next');
                const dotsContainer = container.querySelector('.carousel-dots');

                let currentIndex = 0;

                // Crear puntos indicadores
                images.forEach((_, index) => {
                    const dot = document.createElement('div');
                    dot.classList.add('dot');
                    dot.addEventListener('click', () => goToSlide(index));
                    dotsContainer.appendChild(dot);
                });

                const dots = dotsContainer.querySelectorAll('.dot');

                function updateCarousel() {
                    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                    dots.forEach((dot, index) => {
                        dot.classList.toggle('active', index === currentIndex);
                    });
                }

                function goToSlide(index) {
                    currentIndex = index;
                    updateCarousel();
                }

                function nextSlide() {
                    currentIndex = (currentIndex + 1) % images.length;
                    updateCarousel();
                }

                function prevSlide() {
                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                    updateCarousel();
                }

                nextButton.addEventListener('click', nextSlide);
                prevButton.addEventListener('click', prevSlide);

                updateCarousel();
            });
        });
    </script>
@endsection
