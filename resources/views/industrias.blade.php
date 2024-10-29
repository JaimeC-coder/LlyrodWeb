@extends('layouts.body')

@section('title', $pageTitle)

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/industria.css') }}">
@endsection

@section('content')
    <section class="photoSection" id="mineria">
        <div class="degradadoPortafolioTop1"></div>
        <div class="photoContainer">
            <div class="subtittleContainer">
                <h2 class="tittlePrincipalIndustrias">Minería & Gestión Social</h2>
                <div class="textIndustrias">
                    <h2 class="textPrincipalIndustrias">
                        Desarrollamos estudios especializados y proyectos destinados a atender la zona de influencia directa
                        e indirecta de mina. Nuestros estandares secundan las politicas corporativas de alto nivel.
                        Orientamos el desarrollo de nuestros proyectos e intervenciones bajo un enfoque ESG: Enviromental,
                        Social and Governance.
                    </h2>
                </div>
            </div>
        </div>
        <img class="photo" src="{{ asset('assets/industrial/mineria/titulo.png') }}" alt="Minería">
    </section>

    <section class="cardsSection">
        <span class="quehacemos">Nuestros desarrollos y soluciones</span>
        <div class="cardsContainer">
            @foreach ($cardsMineria as $card)
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
                        <div class="caption">Pie de página para la imagen</div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>

    <!-- Due Diligence Section -->
    <section class="photoSection" id="due_diligence">
        <div class="degradadoPortafolioTop1"></div>
        <img class="photo"src="{{ asset('assets/industrial/inteligenciaNegocios/titulo.jpg') }}" alt="Due Diligence">
        <div class="photoContainer">
            <div class="subtittleContainer">
                <h2 class="tittlePrincipalIndustrias">Due Diligence</h2>
                <div class="textIndustrias">
                    <h2 class="textPrincipalIndustrias">
                        En medio de una industria que está experimentando un cambio fundamental...
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="containerCardPrincipal1">
        <div class="containerCarousel2 cardsSection">
            <span class="quehacemos">Nuestros desarrollos y soluciones</span>
            <div class="carouselContainer2">
                <div class="carrusel2">
                    @foreach ($cardsTecnologia as $index)
                        <div class="carouselItem2">
                            <img src="{{ asset($index['imagenes']['imagen']) }}">
                            <div class="carouselContent">
                                <h3>{{ $index['tittle'] }}</h3>
                                <p>{{ $index['texto'] }}</p>
                                <a href="#" class="readMore">Read More &gt;</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="carouselButton">
                    <button class="carousel-button prev" aria-label="Previous slide">&#10094;</button>
                    <button class="carousel-button next" aria-label="Next slide">&#10095;</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Tecnología Section -->
    <section class="photoSection" id="tecnologia">
        <div class="degradadoPortafolioTop1"></div>
        <img class="photo" src="{{ asset('assets/industrial/tranformacionDigital/titulo.jpg') }}" alt="Tecnología">
        <div class="photoContainer">
            <div class="subtittleContainer">
                <h2 class="tittlePrincipalIndustrias">Transformación digital & IA</h2>
                <div class="textIndustrias">
                    <h2 class="textPrincipalIndustrias">
                        Facilitamos la transición hacia la digitalización democratizando el uso de nuevas tecnologías...
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="cardsSection">
        <span class="quehacemos">Nuestros desarrollos y soluciones</span>
        <div class="cardsContainer">
            @foreach ($cardsBi as $card)
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
                        <div class="caption">Pie de página para la imagen</div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>



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

        setInterval(showNextImage, 3000);
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
