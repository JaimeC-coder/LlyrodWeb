@extends('layouts.body')

@section('title', $pageTitle)

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/industria.css') }}">
@endsection

@section('content')
    <div class="photosContainer">
        <section class="photoSection" id="mineria">
            <div class="photoContainer">
                <img class="photo" src="{{ asset('assets/industrial/mineria/titulo.png') }}" alt="Minería">
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
                   <div class="{{ $loop->even ? 'contentpar':'content' }}">
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
                                    <img src="{{ asset($img['imagen']) }}" alt="Card Title 1">
                                @endforeach

                            </div>

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
                    <img class="photo"src="{{ asset('assets/industrial/inteligenciaNegocios/titulo.jpg') }}"
                        alt="Due Diligence">
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
                        <img src="{{ asset($card['imagenes']['imagen']) }}" alt="Imagen Home" />
                        <div class="overlay"></div>
                        <p class="content">
                            <span>{{ $card['tittle'] }}</span>
                        <p>{{ $card['texto'] }}</p>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="photosContainer">
        <section class="photoSection" id="due_diligence">
            <div class="photoContainer">
                <img class="photo" src="{{ asset('assets/industrial/tranformacionDigital/titulo.jpg') }}"
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
                        <img src="{{ asset($card['imagenes']['imagen']) }}" alt="Imagen Home" />
                        <div class="overlay"></div>
                        <p class="content">
                            <span>{{ $card['tittle'] }}</span>
                        <p>{{ $card['texto'] }}</p>
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
            const carousels = document.querySelectorAll('.carouselInner1');

            carousels.forEach(carousel => {
                const images = carousel.querySelectorAll('img');
                let currentIndex = 0;

                function showNextImage() {
                    images[currentIndex].classList.remove('active');
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].classList.add('active');
                    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                }

                // Generamos un retraso aleatorio entre 0 y 2000 ms
                const delay = Math.floor(Math.random() * 2000);

                // Usamos setTimeout para iniciar el carrusel después del retraso
                setTimeout(() => {
                    setInterval(showNextImage, 3000);
                }, delay);

            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carrusel2');
            const items = document.querySelectorAll('.carouselItem2');
            const prevButton = document.querySelector('.carousel-button.prev');
            const nextButton = document.querySelector('.carousel-button.next');
            //quiero que captures el tamaño de la pantalla
            const screenWidth = window.innerWidth;
            let currentIndex = 2;
            const totalItems = items.length;

            function updateCarousel() {
                if (screenWidth < 800) {
                    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                } else {
                    carousel.style.transform = `translateX(-${currentIndex * 50}%)`;
                }
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalItems;
                updateCarousel();
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                updateCarousel();
            }

            nextButton.addEventListener('click', nextSlide);
            prevButton.addEventListener('click', prevSlide);

            // Clone first item and append to the end for infinite effect
            const firstItemClone = items[0].cloneNode(true);
            carousel.appendChild(firstItemClone);

            // Auto-advance carousel
            setInterval(nextSlide, 5000);
        });
    </script>
@endsection
