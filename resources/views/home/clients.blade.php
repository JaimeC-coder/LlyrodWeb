<div class="sectionClients">
    <div class="containerClient">
        <div class="content">
            <h2 class="title">Nuestros clientes</h2>
            <p class="description">
                En
                <strong>
                    Grupo Llyrod
                </strong>
                , cada colaboración con nuestros clientes es una oportunidad para crecer juntos. Nos enorgullece ser parte
                de sus logros, brindándoles soluciones innovadoras y un compromiso constante con su éxito. Descubre cómo la
                satisfacción de nuestros clientes es el reflejo de nuestra pasión por la excelencia. ¡Unidos, hacemos
                posible lo extraordinario!
            </p>

            <div class="cardGrid">

                <div class="cardGrid">
                    @foreach ($cliens as $client)
                        <div class="card">
                            <div class="media">
                                <img src="{{ $client['imagen'] }}" alt="{{ $client['nombre'] }}" />
                            </div>
                            <div class="mediaMobil">
                                <img src="{{ $client['imagenResponsive'] }}" alt="{{ $client['nombre'] }}" />
                            </div>
                            <h3 class="cardTitle">{{ $client['nombre'] }}</h3>
                        </div>
                    @endforeach
                    @foreach ($cliens as $client) <!-- Duplicado para efecto de carrusel continuo -->
                        <div class="card">
                            <div class="media">
                                <img src="{{ $client['imagen'] }}" alt="{{ $client['nombre'] }}" />
                            </div>
                            <div class="mediaMobil">
                                <img src="{{ $client['imagenResponsive'] }}" alt="{{ $client['nombre'] }}" />
                            </div>
                            <h3 class="cardTitle">{{ $client['nombre'] }}</h3>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</div>


