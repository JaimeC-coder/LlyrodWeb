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

                <div class="{{ $loop->even ? 'cardPar' : 'card' }}">
                  <div class="imageContainer" data-total-duration="{{ count($card['imagenes']) * 2 + $loop->iteration }}
                        @foreach ($card['imagenes'] as $img)
                            <img class="cardImage" src="{{ asset($img['imagen']) }}" alt="Card Title 1">
                        @endforeach
                    </div>
                    <div class="cardcontexttext">
                        <span class="cardTittle">{{ $card['tittle'] }}</span>
                        <span class="cardTexto">{{ $card['texto'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Due Diligence Section -->
    <section class="photoSection" id="due_diligence">
        <div class="degradadoPortafolioTop1"></div>
        <img class="photo"src="{{ asset('assets/industrial/inteligenciaNegocios/titulo.jpg') }}" alt="Due Diligence">
        <div class="photoContainerPar">
            <div class="subtittleContainer">
                <h2 class="tittlePrincipalIndustriasPar">Due diligence</h2>
                <div class="textIndustrias">
                    <h2 class="textPrincipalIndustrias">
                        En medio de una industria que está experimentando un cambio fundamental...
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="cardsSection">
        <span class="quehacemos">Nuestros desarrollos y soluciones</span>
        <div class="carrusel-container">
            <div class="carrusel">
                @foreach ($cardsTecnologia as $index => $card)
                    <div class="carrusel-item {{ $loop->even ? 'cardPar' : 'card' }}">
                        <div class="imageContainer" data-total-duration="{{ count($card['imagenes']) * 2 + $loop->iteration }}">
                            @foreach ($card['imagenes'] as $img)
                                <img class="cardImage" src="{{ asset($img['imagen']) }}" alt="{{ $card['tittle'] }}">
                            @endforeach
                        </div>
                        <div class="cardcontexttext">
                            <span class="cardTittle">{{ $card['tittle'] }}</span>
                            <span class="cardTexto">{{ $card['texto'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carrusel-control prev" aria-label="Anterior">&lt;</button>
            <button class="carrusel-control next" aria-label="Siguiente">&gt;</button>
            <div class="carrusel-indicators">
                @foreach ($cardsTecnologia as $index => $card)
                    <button class="carrusel-indicator" data-index="{{ $index }}" aria-label="Ir a la tarjeta {{ $index + 1 }}"></button>
                @endforeach
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

                <div class="{{ $loop->even ? 'cardPar' : 'card' }}">
                    <div class="imageContainer"  style="--totalDuration: {{ count($card['imagenes']) * 2 }}s;">
                        @foreach ($card['imagenes'] as $img)
                            <img class="cardImage" src="{{ asset($img['imagen']) }}" alt="Card Title 1">
                        @endforeach
                    </div>
                    <div class="cardcontexttext">
                        <span class="cardTittle">{{ $card['tittle'] }}</span>
                        <span class="cardTexto">{{ $card['texto'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const carrusel = document.querySelector('.carrusel');
    const items = carrusel.querySelectorAll('.carrusel-item');
    const prevBtn = document.querySelector('.carrusel-control.prev');
    const nextBtn = document.querySelector('.carrusel-control.next');
    const indicators = document.querySelectorAll('.carrusel-indicator');
    let currentIndex = 0;

    function updateCarrusel() {
        carrusel.style.transform = `translateX(-${currentIndex * 100}%)`;
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentIndex);
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        updateCarrusel();
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        updateCarrusel();
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % items.length;
        updateCarrusel();
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => goToSlide(index));
    });

    // Implementar rotación automática de imágenes dentro de cada tarjeta
    items.forEach(item => {
        const imageContainer = item.querySelector('.imageContainer');
        const images = imageContainer.querySelectorAll('.cardImage');
        let imageIndex = 0;
        const totalDuration = parseFloat(imageContainer.dataset.totalDuration);

        function rotateImages() {
            images[imageIndex].style.opacity = '0';
            imageIndex = (imageIndex + 1) % images.length;
            images[imageIndex].style.opacity = '1';
        }

        setInterval(rotateImages, (totalDuration * 1000) / images.length);
    });

    // Inicializar el carrusel
    updateCarrusel();
});
    </script>
@endsection
